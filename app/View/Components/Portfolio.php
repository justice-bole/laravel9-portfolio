<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Arr;
use Illuminate\View\Component;

class Portfolio extends Component
{
    public array $items = [];
    public array $tabs = [];
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->items = [
            [
                'category' => ['Unity', 'C#'],
                'title' => 'Complete Real-time Top Down Shooter with Unity and C#',
                'image' => url('/img/poseidon_pic.jpg'),
                'github' => 'https://github.com/justice-bole/Poseidon'
            ],

            [
                'category' => ['Unity', 'C#'],
                'title' => 'Complete Real-time Strategy Game with Unity and C#',
                'image' => url('/img/tk_pic.jpg'),
                'github' => 'https://github.com/justice-bole/Tower-Knights'
            ],

            [
                'category' => ['Unity', 'C#'],
                'title' => 'Customizable FPS Character Controller for Unity in C#',
                'image' => url('/img/fps_pic.jpg'),
                'github' => 'https://github.com/justice-bole/FPS-Controller'
            ],

            [
                'category' => ['Raylib', 'C++'],
                'title' => 'Complete LCD/Handheld Inspired Racing Game with C++',
                'image' => url('/img/dodger.jpg'),
                'github' => 'https://github.com/justice-bole/Raylib-Projects/tree/main/Dodger'
            ],

            [
                'category' => ['Love', 'Lua'],
                'title' => '2D Platforming Demo with Lua and Love',
                'image' => url('/img/platformer_pic.jpg'),
                'github' => 'https://github.com/justice-bole/Love2D-Projects/tree/main/platformer'
            ],

            [
                'category' => ['Flutter', 'Dart'],
                'title' => 'Mobile Group Chat Application made with Flutter',
                'image' => url('/img/flash_chat.jpg'),
                'github' => 'https://github.com/justice-bole/FlutterApps/tree/main/flash-chat'
            ],

            [
                'category' => ['Love', 'Lua'],
                'title' => 'Pong in Space with Love and Lua',
                'image' => url('/img/pong_pic.jpg'),
                'github' => 'https://github.com/justice-bole/Love2D-Projects/tree/main/pong'
            ],

            [
                'category' => ['Godot', 'GDScript'],
                'title' => 'Top Down Zombie Survival Demo with Godot',
                'image' => url('/img/zombie_pic.jpg'),
                'github' => 'https://github.com/justice-bole/Godot-Projects/tree/main/ZombieGame'
            ],

            [
                'category' => ['C++'],
                'title' => 'Command Line Black Jack with C++',
                'image' => url('/img/cl_blackjack.jpg'),
                'github' => 'https://github.com/justice-bole/CPP-Projects/tree/main/Learncpp/BlackJackClasses'
            ],

            [
                'category' => ['C++'],
                'title' => 'Command Line Role Playing Game with C++',
                'image' => url('/img/cl_rpg.jpg'),
                'github' => 'https://github.com/justice-bole/CPP-Projects/tree/main/Learncpp/MonsterBattles'
            ],

        ];

        $this->tabs = array_unique(Arr::flatten(Arr::pluck($this->items, 'category')));
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.portfolio');
    }
}
