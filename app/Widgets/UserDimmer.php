<?php

namespace App\Widgets;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use TCG\Voyager\Facades\Voyager;
use TCG\Voyager\Widgets\BaseDimmer;

class UserDimmer extends BaseDimmer
{
    /**
     * The configuration array.
     *
     * @var array
     */
    protected $config = [];

    /**
     * Treat this method as a controller action.
     * Return view() or other content to display.
     */
    public function run()
    {
        $count = Voyager::model('User')->count();
        $string = "A total of {$count} users";

        return view('voyager::dimmer', array_merge($this->config, [
            'icon'   => 'voyager-paw',
            'title'  => "{$count} users",
            'text'   => $string,
            'button' => [
                'text' => 'Search Users',
                'link' => route('voyager.users.index'),
            ],
            'image' => voyager::image('Team.jpg'),
        ]));
    }

    /**
     * Determine if the widget should be displayed.
     *
     * @return bool
     */
    public function shouldBeDisplayed()
    {
        return true;
    }
}