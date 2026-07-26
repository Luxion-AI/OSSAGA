<?php

namespace App\Services;

use App\Models\Period;
use App\Models\Content;
use Illuminate\Support\Facades\Cache;

class ArchiveService
{
    /**
     * Get archived timeline for all periods.
     * Heavily cached since past periods do not change often.
     */
    public function getTimelineArchived()
    {
        return Cache::remember('archive:timeline', now()->addDays(7), function () {
            return Period::where('is_active', false)
                ->orderBy('start_year', 'desc')
                ->get();
        });
    }

    /**
     * Get Hall of Leadership (all chairmen from past periods).
     */
    public function getHallOfLeadership()
    {
        return Cache::tags(['leadership', 'archive'])->remember('archive:leadership', now()->addDays(30), function () {
            return Period::where('is_active', false)
                ->whereNotNull('chairman_photo_path')
                ->select('id', 'cabinet_name', 'start_year', 'end_year', 'chairman_photo_path', 'chairman_greeting')
                ->with(['users' => function($q) {
                    $q->wherePivot('role', 'chairman');
                }])
                ->orderBy('start_year', 'desc')
                ->get();
        });
    }

    /**
     * Get contents from a specific archived period.
     */
    public function getPeriodContents(int $periodId)
    {
        return Cache::tags(['archive', "period:{$periodId}"])->remember("period:{$periodId}:contents", now()->addDay(), function () use ($periodId) {
            return Content::where('period_id', $periodId)
                ->where('status', 'published')
                ->with('author')
                ->orderBy('published_at', 'desc')
                ->get();
        });
    }
}
