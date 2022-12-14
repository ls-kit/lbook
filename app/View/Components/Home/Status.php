<?php

namespace App\View\Components\Home;

use Illuminate\View\Component;

class Status extends Component
{
     /**
     * The status type.
     *
     * @var string
     */
    public $type;
 
    /**
     * The status title.
     *
     * @var string
     */
    public $title;

    /**
     * The status number.
     *
     * @var int
     */
    public $number;

    /**
     * The status growth.
     *
     * @var int
     */
    public $growth;

     /**
     * Create the component instance.
     *
     * @param  string  $type
     * @param  string  $title
     * @param  int  $number
     * @param  int  $growth
     * @return void
     */
    public function __construct($type, $title, $number, $growth)
    {
        $this->type = $type;
        $this->title = $title;
        $this->number = $number;
        $this->growth = $growth;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.home.status');
    }
}
