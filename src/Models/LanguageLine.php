<?php

namespace DeltaSolutions\Translations\Models;

class LanguageLine extends \Spatie\TranslationLoader\LanguageLine
{
    public function getTranslation(string $locale): ?string
    {
        if (! isset($this->$locale)) {
            $fallback = config('app.fallback_locale');

            return $this->$fallback ?? null;
        }

        return $this->$locale;
    }
}
