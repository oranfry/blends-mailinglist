<?php
namespace tablelink;

class mailinglistmailinglistsubscriber extends \Tablelink
{
    public function __construct()
    {
        $this->tables = ['mailinglist', 'mailinglistsubscriber'];
        $this->middle_table = 'tablelink_mailinglist_mailinglistsubscriber';
        $this->ids = ['mailinglist', 'subscriber'];
        $this->type = 'onemany';
    }
}
