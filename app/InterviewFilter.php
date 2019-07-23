<?php


namespace App;


class InterviewFilter extends QueryFilter
{
    public function name($name)
    {
        return $this->builder->where("name","LIKE",'%'.$name.'%');
    }

    public function address($address)
    {
        return $this->builder->where("address","=", $address);
    }

    public function status($status)
    {
        return $this->builder->where("status","=",$status);
    }

    public function sort_name($type = null) {
        return $this->builder->orderBy('name', (!$type || $type == 'asc') ? 'desc' : 'asc');
    }

    public function sort_address($type = null) {
        return $this->builder->orderBy('address', (!$type || $type == 'asc') ? 'desc' : 'asc');
    }

    public function sort_timestart($type = null) {
        return $this->builder->orderBy('timeStart', (!$type || $type == 'asc') ? 'desc' : 'asc');
    }
}