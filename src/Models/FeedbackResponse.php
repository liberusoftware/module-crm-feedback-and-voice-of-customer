<?php

declare(strict_types=1);

namespace Liberu\CRM\FeedbackAndVoiceOfCustomer\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Liberu\Foundation\Organizations\Models\Team;
use Illuminate\Database\Eloquent\Model;

/** @property int $team_id @property int $survey_id @property int|null $score @property string|null $sentiment */
final class FeedbackResponse extends Model
{
    public function team(): BelongsTo
    {
        return $this->belongsTo(Team::class);
    }

    protected $table = 'crm_feedback_responses';

    protected $guarded = [];

    protected function casts(): array
    {
        return ['answers' => 'array'];
    }
}
