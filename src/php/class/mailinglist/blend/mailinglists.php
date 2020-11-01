<?php
namespace mailinglist\blend;

class mailinglists extends \Blend
{
    public function __construct()
    {
        $this->label = 'Mailing Lists';
        $this->linetypes = ['mailinglist',];
        $this->showass = ['list'];
        $this->fields = [
            (object) [
                'name' => 'icon',
                'type' => 'icon',
            ],
            (object) [
                'name' => 'title',
                'type' => 'text',
            ],
        ];
    }
}
