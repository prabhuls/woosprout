<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Support\Facades\DB;

class ValidInviteCode implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        $inviteCode = DB::table('invite_codes')
                        ->where('code', $value)
                        ->first();
        
        if (!$inviteCode) {
            $fail('The :attribute is invalid.');
        } elseif ($inviteCode->uses >= $inviteCode->max_uses) {
            $fail('The :attribute has already been used.');
        }
    }
}
