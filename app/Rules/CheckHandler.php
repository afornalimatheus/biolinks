<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class CheckHandler implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string, ?string=): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        if (!preg_match('/^@[a-zA-Z0-9_-]+$/', $value)) {
            $fail('Precisa comçar com um "@" e você só poder usar _, -, letras e números e sem espaços."');
        }

        if (!str_starts_with($value, '@')) {
            $fail('Precisa começar com um @.');
        }

        if (str_contains($value, ' ')) {
            $fail('Não pode conter espaços.');
        }
    }
}
