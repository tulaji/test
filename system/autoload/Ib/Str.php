<?php
class Ib_Str
{
    public static function serial($separator = '-')
    {
        $tokens = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';

        $serial = '';

        for ($i = 0; $i < 4; $i++) {
            for ($j = 0; $j < 5; $j++) {
                $serial .= $tokens[rand(0, 35)];
            }

            if ($i < 3) {
                $serial .= $separator;
            }
        }

        return $serial;
    }

    public static function random_string($length)
    {
        $key = '';
        $keys = array_merge(range(0, 9), range('a', 'z'));

        for ($i = 0; $i < $length; $i++) {
            $key .= $keys[array_rand($keys)];
        }

        return $key;
    }

    public static function random_alpha($lenght)
    {
        $s = substr(
            str_shuffle(str_repeat("abcdefghijklmnopqrstuvwxyz", $lenght)),
            0,
            $lenght
        );

        return $s;
    }

    public static function randomName()
    {
        //PHP array containing forenames.
        $names = [
            'Red',
            'Pink',
            'Purple',
            'Indigo',
            'Blue',
            'Cyan',
            'Teal',
            'Green',
            'Lime',
            'Azure',
        ];

        //PHP array containing surnames.
        $surnames = [
            'Cactus',
            'Jellyfish',
            'Rhino',
            'Sunshine',
            'Taxi',
            'Stereo',
            'Cat',
            'Rose',
            'Tree',
            'Leaf',
            'Radio',
            'Bear',
            'Unicorn',
            'Train',
            'Dove',
            'Spider',
            'Basketball',
            'Microphone',
            'Snowflake',
            'Microphone',
            'Windmill',
            'Mushroom',
            'Bird',
            'Rocket',
            'Anchor',
            'Light',
            'Ship',
            'Boat',
            'Paw',
            'Camel',
            'Butterfly',
            'Raindrop',
            'Spaceship',
        ];

        //Generate a random forename.
        $random_name = $names[random_int(0, count($names) - 1)];

        //Generate a random surname.
        $random_surname = $surnames[random_int(0, count($surnames) - 1)];

        //Combine them together and print out the result.
        return $random_name . ' ' . $random_surname;
    }
}
