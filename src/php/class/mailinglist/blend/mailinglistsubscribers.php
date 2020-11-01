<?php
namespace mailinglist\blend;

class mailinglistsubscribers extends \Blend
{
    public function __construct()
    {
        $this->label = 'Mailing Lists Subscribers';
        $this->linetypes = ['mailinglistsubscriber',];
        $this->showass = ['list'];
        $this->fields = [
            (object) [
                'name' => 'icon',
                'type' => 'icon',
            ],
            (object) [
                'name' => 'email',
                'type' => 'text',
            ],
            (object) [
                'name' => 'name',
                'type' => 'text',
            ],
            (object) [
                'name' => 'nickname',
                'type' => 'text',
            ],
        ];
    }
}
