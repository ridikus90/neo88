<?php

namespace yiiunit\extensions\faker\data\providers;

use \Faker\Provider\Base;

class Book extends Base
{

    public function title($nbWords = 5)
    {
        $sentence = $this->generator->sentence($nbWords);
        return mb_substr($sentence, 0, mb_strlen($sentence) - 1);
    }

}
