<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Industry;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;

class AdminIndustryController extends Controller
{
    /**
     * Display a listing of industries in Admin Panel (10 per page).
     */
    public function index()
    {
        $industries = Industry::orderBy('sort_order', 'asc')
            ->orderBy('id', 'asc')
            ->paginate(10);

        return view('admin.industries.index', compact('industries'));
    }

    /**
     * Show form for creating a new industry.
     */
    public function create()
    {
        $nextOrder = (Industry::max('sort_order') ?? 0) + 1;
        return view('admin.industries.create', compact('nextOrder'));
    }

    /**
     * Store a newly created industry in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title'       => 'required|string|max:255',
            'slug'        => 'nullable|string|max:255|unique:industries,slug',
            'tagline'     => 'nullable|string|max:500',
            'short_desc'  => 'nullable|string',
            'description' => 'nullable|string',
            'image'       => 'nullable|image|mimes:jpeg,png,jpg,webp,svg|max:4096',
            'image_url'   => 'nullable|string|max:500',
            'highlights'  => 'nullable|string',
            'why_nexteck' => 'nullable|string',
            'keywords'    => 'nullable|string',
            'seo_title'   => 'nullable|string|max:255',
            'meta_desc'   => 'nullable|string|max:500',
            'sort_order'  => 'nullable|integer|min:1',
            'is_active'   => 'nullable|boolean',
        ]);

        $slug = !empty($validated['slug']) ? Str::slug($validated['slug']) : Str::slug($validated['title']);
        // Ensure slug is unique
        $originalSlug = $slug;
        $counter = 1;
        while (Industry::where('slug', $slug)->exists()) {
            $slug = "{$originalSlug}-{$counter}";
            $counter++;
        }

        $imagePath = $validated['image_url'] ?? null;
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . '_' . Str::slug(pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME)) . '.' . $file->getClientOriginalExtension();
            $destinationPath = public_path('images/industries');
            if (!File::isDirectory($destinationPath)) {
                File::makeDirectory($destinationPath, 0755, true);
            }
            $file->move($destinationPath, $filename);
            $imagePath = 'images/industries/' . $filename;
        }

        $highlightsArray = $this->parseList($request->input('highlights'));
        $keywordsArray   = $this->parseList($request->input('keywords'));

        Industry::create([
            'title'       => $validated['title'],
            'slug'        => $slug,
            'tagline'     => $validated['tagline'] ?? null,
            'short_desc'  => $validated['short_desc'] ?? null,
            'description' => $validated['description'] ?? null,
            'image'       => $imagePath,
            'highlights'  => $highlightsArray,
            'why_nexteck' => $validated['why_nexteck'] ?? null,
            'keywords'    => $keywordsArray,
            'seo_title'   => $validated['seo_title'] ?: ($validated['title'] . ' | Nexteck London'),
            'meta_desc'   => $validated['meta_desc'] ?: ($validated['tagline'] ?? $validated['short_desc']),
            'sort_order'  => $validated['sort_order'] ?? 1,
            'is_active'   => $request->has('is_active') ? 1 : 0,
        ]);

        return redirect()->route('admin.industries.index')
            ->with('success', 'Industry sector created successfully!');
    }

    /**
     * Show form for editing an industry.
     */
    public function edit($id)
    {
        $industry = Industry::findOrFail($id);
        return view('admin.industries.edit', compact('industry'));
    }

    /**
     * Update an industry in storage.
     */
    public function update(Request $request, $id)
    {
        $industry = Industry::findOrFail($id);

        $validated = $request->validate([
            'title'       => 'required|string|max:255',
            'slug'        => 'nullable|string|max:255|unique:industries,slug,' . $industry->id,
            'tagline'     => 'nullable|string|max:500',
            'short_desc'  => 'nullable|string',
            'description' => 'nullable|string',
            'image'       => 'nullable|image|mimes:jpeg,png,jpg,webp,svg|max:4096',
            'image_url'   => 'nullable|string|max:500',
            'highlights'  => 'nullable|string',
            'why_nexteck' => 'nullable|string',
            'keywords'    => 'nullable|string',
            'seo_title'   => 'nullable|string|max:255',
            'meta_desc'   => 'nullable|string|max:500',
            'sort_order'  => 'nullable|integer|min:1',
            'is_active'   => 'nullable|boolean',
        ]);

        $slug = !empty($validated['slug']) ? Str::slug($validated['slug']) : Str::slug($validated['title']);
        if ($slug !== $industry->slug) {
            $originalSlug = $slug;
            $counter = 1;
            while (Industry::where('slug', $slug)->where('id', '!=', $industry->id)->exists()) {
                $slug = "{$originalSlug}-{$counter}";
                $counter++;
            }
        }

        $imagePath = $industry->image;
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . '_' . Str::slug(pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME)) . '.' . $file->getClientOriginalExtension();
            $destinationPath = public_path('images/industries');
            if (!File::isDirectory($destinationPath)) {
                File::makeDirectory($destinationPath, 0755, true);
            }
            $file->move($destinationPath, $filename);
            $imagePath = 'images/industries/' . $filename;
        } elseif (!empty($validated['image_url'])) {
            $imagePath = $validated['image_url'];
        }

        $highlightsArray = $this->parseList($request->input('highlights'));
        $keywordsArray   = $this->parseList($request->input('keywords'));

        $industry->update([
            'title'       => $validated['title'],
            'slug'        => $slug,
            'tagline'     => $validated['tagline'] ?? null,
            'short_desc'  => $validated['short_desc'] ?? null,
            'description' => $validated['description'] ?? null,
            'image'       => $imagePath,
            'highlights'  => $highlightsArray,
            'why_nexteck' => $validated['why_nexteck'] ?? null,
            'keywords'    => $keywordsArray,
            'seo_title'   => $validated['seo_title'] ?: ($validated['title'] . ' | Nexteck London'),
            'meta_desc'   => $validated['meta_desc'] ?: ($validated['tagline'] ?? $validated['short_desc']),
            'sort_order'  => $validated['sort_order'] ?? 1,
            'is_active'   => $request->has('is_active') ? 1 : 0,
        ]);

        return redirect()->route('admin.industries.index')
            ->with('success', 'Industry sector updated successfully!');
    }

    /**
     * Remove an industry from storage.
     */
    public function destroy($id)
    {
        $industry = Industry::findOrFail($id);
        $industry->delete();

        return redirect()->route('admin.industries.index')
            ->with('success', 'Industry sector deleted successfully!');
    }

    /**
     * Helper to parse newline or comma separated items into a clean array.
     */
    private function parseList(?string $input): array
    {
        if (empty($input)) {
            return [];
        }

        // Split by lines or commas
        $lines = preg_split('/[\r\n]+/', $input);
        $items = [];
        foreach ($lines as $line) {
            $trimmed = trim($line, " \t\n\r\0\x0B-*•");
            if ($trimmed !== '') {
                $items[] = $trimmed;
            }
        }
        return array_values(array_unique($items));
    }
}
