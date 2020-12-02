<?php
namespace mailinglist\linetype;

class mailinglistsubscriber extends \Linetype
{
    public function __construct()
    {
        $this->table = 'mailinglistsubscriber';
        $this->label = 'Mailing List Subscriber';
        $this->fields = [
            (object) [
                'name' => 'icon',
                'type' => 'icon',
                'fuse' => "'envelope'",
                'derived' => true,
            ],
            (object) [
                'name' => 'email',
                'type' => 'text',
                'fuse' => '{t}.email',
            ],
            (object) [
                'name' => 'name',
                'type' => 'text',
                'fuse' => '{t}.name',
            ],
            (object) [
                'name' => 'nickname',
                'type' => 'text',
                'fuse' => '{t}.nickname',
            ],
        ];
        $this->unfuse_fields = [
            '{t}.email' => (object) [
                'expression' => ':{t}_email',
                'type' => 'varchar(255)',
            ],
            '{t}.name' => (object) [
                'expression' => ':{t}_name',
                'type' => 'varchar(255)',
            ],
            '{t}.nickname' => (object) [
                'expression' => ':{t}_nickname',
                'type' => 'varchar(255)',
            ],
        ];
    }

    public function validate($line)
    {
        $errors = [];

        if (@$line->email == null) {
            $errors[] = 'no email';
        }

        return $errors;
    }

    public function complete($line)
    {
        if (!@$line->nickname && @$line->name) {
            $line->nickname = $line->name;
        }

        return $line;
    }
}
