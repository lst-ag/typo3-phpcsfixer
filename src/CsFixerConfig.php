<?php

declare(strict_types=1);

namespace LST\TYPO3PhpCsFixer;

class CsFixerConfig extends \TYPO3\CodingStandards\CsFixerConfig
{
    protected static array $customRules = [
        'blank_line_before_statement' => true,
        'header_comment' => ['header' => ''],
    ];

    public function __construct(string $name = 'lst-typo3')
    {
        parent::__construct($name);
    }

    public static function create(): static
    {
        $static = parent::create();
        $static->setRules(static::getCombinedRules());
        $static->getFinder()
            ->notPath('config/system/settings.php');

        return $static;
    }

    public static function getCombinedRules(): array
    {
        return array_merge(static::$typo3Rules, static::$customRules);
    }
}
