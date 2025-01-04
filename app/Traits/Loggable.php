<?php
namespace App\Traits;
use App\Models\Log;
use Illuminate\Support\Facades\Auth;

trait Loggable
{
    public function logActivity($action, $model = null, $modelId = null, $details = null)
    {
        Log::create([
            'user_id' => Auth::id(),
            'action' => $action,
            'model' => $model,
            'model_id' => $modelId,
            'details' => $details ? json_encode($details) : null,
        ]);
    }
}
