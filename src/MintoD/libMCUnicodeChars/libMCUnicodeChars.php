<?php

declare(strict_types=1);

namespace MintoD\libMCUnicodeChars;

class libMCUnicodeChars
{
    public const FORWARD_ARROW_BUTTON = "";
    public const LEFT_ARROW_BUTTON = "";
    public const BACKWARDS_ARROW_BUTTON = "";
    public const RIGHT_ARROW_BUTTON = "";
    public const JUMP_BUTTON = "";
    public const CROUCH_BUTTON = "";
    public const FLY_UP_BUTTON = "";
    public const FLY_DOWN_BUTTON = "";
    public const CRAFTABLE_BUTTON_ON = "";
    public const CRAFTABLE_BUTTON_OFF = "";
    public const FOOD_ICON = "";
    public const ARMOR_ICON = "";
    public const MINECOIN = "";
    public const CODE_BUILDER_BUTTON = "";
    public const IMMERSIVE_READER_BUTTON = "";
    public const TOKEN = "";

    public static function replace(string $str): string
    {
        return str_replace("{IMMERSIVE_READER_BUTTON}", self::IMMERSIVE_READER_BUTTON, str_replace("{TOKEN}", self::TOKEN, str_replace("{CODE_BUILDER_BUTTON}", self::CODE_BUILDER_BUTTON, str_replace("{MINECOIN}", self::MINECOIN, str_replace("{ARMOR_ICON}", self::ARMOR_ICON, str_replace("{CRAFTABLE_BUTTON_OFF}", self::CRAFTABLE_BUTTON_OFF, str_replace("{FOOD_ICON}", self::FOOD_ICON, str_replace("{CRAFTABLE_BUTTON_ON}", self::CRAFTABLE_BUTTON_ON, str_replace("{FLY_UP_BUTTON}", self::FLY_UP_BUTTON, str_replace("{FLY_DOWN_BUTTON}", self::FLY_DOWN_BUTTON, str_replace("{CROUCH_BUTTON}", self::CROUCH_BUTTON, str_replace("{JUMP_BUTTON}", self::JUMP_BUTTON, str_replace("{RIGHT_ARROW_BUTTON}", self::RIGHT_ARROW_BUTTON, str_replace("{BACKWARDS_ARROW_BUTTON}", self::BACKWARDS_ARROW_BUTTON,  str_replace("{FORWARD_ARROW_BUTTON}", self::FORWARD_ARROW_BUTTON, str_replace("{LEFT_ARROW_BUTTON}", self::LEFT_ARROW_BUTTON, $str))))))))))))))));
    }
}
