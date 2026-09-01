<?php

declare(strict_types=1);

namespace Liberu\CRM\FeedbackAndVoiceOfCustomer\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Liberu\Foundation\Organizations\Models\Team;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int $team_id
 * @property int $survey_id
 * @property string $token
 */
final class FeedbackDelivery extends Model
{
    public function team(): BelongsTo
    {
        return $this->belongsTo(Team::class);
    }

    protected $table = 'crm_feedback_deliveries';

    protected $guarded = [];

    protected function casts(): array
    {
        return ['sent_at' => 'datetime', 'responded_at' => 'datetime'];
    }
}
