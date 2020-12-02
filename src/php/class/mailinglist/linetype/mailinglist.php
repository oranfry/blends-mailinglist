<?php
namespace mailinglist\linetype;

class mailinglist extends \Linetype
{
    public function __construct()
    {
        $this->table = 'mailinglist';
        $this->label = 'Mailing List';
        $this->fields = [
            (object) [
                'name' => 'icon',
                'type' => 'icon',
                'fuse' => "'envelopes'",
                'derived' => true,
            ],
            (object) [
                'name' => 'title',
                'type' => 'text',
                'fuse' => '{t}.title',
            ],
        ];
        $this->unfuse_fields = [
            '{t}.title' => (object) [
                'expression' => ':{t}_title',
                'type' => 'varchar(255)',
            ],
        ];
        $this->children = [
            (object) [
                'label' => 'subscribers',
                'linetype' => 'mailinglistsubscriber',
                'rel' => 'many',
                'parent_link' => 'mailinglistmailinglistsubscriber',
            ],
       ];
    }

    public function validate($line)
    {
        $errors = [];

        if (@$line->title == null) {
            $errors[] = 'no title';
        }

        return $errors;
    }
}
