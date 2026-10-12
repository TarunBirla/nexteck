<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\ToolkitController;
use App\Models\SmeToolkit;
use Illuminate\Http\Request;

class AdminToolkitController extends Controller
{
    public function index()
    {
        ToolkitController::ensureTableExists();
        $toolkits = SmeToolkit::latest()->paginate(10);
        return view('admin.toolkits.index', compact('toolkits'));
    }

    public function show($id)
    {
        $toolkit  = SmeToolkit::findOrFail($id);
        $template = ToolkitController::getDefaultTemplate();
        return view('admin.toolkits.show', compact('toolkit', 'template'));
    }

    public function update(Request $request, $id)
    {
        $toolkit = SmeToolkit::findOrFail($id);

        $validated = $request->validate([
            'client_name'      => 'required|string|max:255',
            'company_name'     => 'required|string|max:255',
            'client_email'     => 'required|email|max:255',
            'phone'            => 'nullable|string|max:50',
            'status'           => 'required|string|max:50',
            'admin_notes'      => 'nullable|string',
            'diagnostic_data'  => 'nullable|array',
            'benchmark_data'   => 'nullable|array',
            'competitor_data'  => 'nullable|array',
            'opportunity_data' => 'nullable|array',
            'sop_data'         => 'nullable|array',
            'kpi_data'         => 'nullable|array',
        ]);

        if (!empty($validated['benchmark_data'])) {
            foreach ($validated['benchmark_data'] as &$row) {
                $c = is_numeric($row['client_score'] ?? null) ? (float) $row['client_score'] : 0;
                $l = is_numeric($row['leader_score'] ?? null) ? (float) $row['leader_score'] : 0;
                $row['gap'] = ($c > 0 || $l > 0) ? ($l - $c) : 0;
            }
        }

        if (!empty($validated['opportunity_data'])) {
            foreach ($validated['opportunity_data'] as &$row) {
                $impact  = is_numeric($row['impact'] ?? null) ? (float) $row['impact'] : 0;
                $urgency = is_numeric($row['urgency'] ?? null) ? (float) $row['urgency'] : 0;
                $row['priority_score'] = $impact * $urgency;
            }
        }

        if (!empty($validated['kpi_data'])) {
            foreach ($validated['kpi_data'] as &$row) {
                $target = is_numeric($row['target'] ?? null) ? (float) $row['target'] : 0;
                $actual = is_numeric($row['actual'] ?? null) ? (float) $row['actual'] : 0;
                $variance = $actual - $target;
                $row['variance'] = round($variance, 4);
                $row['variance_pct'] = $target != 0 ? round(($variance / $target) * 100, 1) : 0;
            }
        }

        $toolkit->update($validated);

        return redirect()
            ->route('admin.toolkits.show', $toolkit->id)
            ->with('success', 'SME Strategy Toolkit updated successfully!');
    }

    public function destroy($id)
    {
        $toolkit = SmeToolkit::findOrFail($id);
        $toolkit->delete();

        return redirect()
            ->route('admin.toolkits.index')
            ->with('success', 'SME Strategy Toolkit submission deleted successfully.');
    }
}
