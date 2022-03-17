<?php

declare(strict_types=1);

namespace Translator\Translator;

interface TranslationRepository
{
    public function exists(Translation $translation, string $language): bool;

    public function save(Translation $translation, string $language): void;

    public function getTranslations(string $language): array;

    public function removeByKey(string $translationKey, string $language): void;
}
