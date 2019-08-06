<?php


namespace App;


class InterviewFilter extends QueryFilter
{
    public function keyword($keyword)
    {
        if($keyword == "all")
            return $this->builder;
        else
          return $this->builder->where("name","LIKE",'%'.$keyword.'%');
    }

    public function address($address)
    {
        if($address == "all")
            return $this->builder;
        else
            return $this->builder->where("address","=", $address);
    }

    public function status($status)
    {
        if($status == "all")
            return $this->builder;
        else
            return $this->builder->where("status","=",$status);
    }

    public function sort_name($type = null) {
        return $this->builder->orderBy('name', (!$type || $type == 'asc') ? 'desc' : 'asc');
    }

    public function sort_address($type = null) {
        return $this->builder->orderBy('address', (!$type || $type == 'asc') ? 'desc' : 'asc');
    }

    public function sort_status($type = null) {
        return $this->builder->orderBy('status', (!$type || $type == 'asc') ? 'desc' : 'asc');
    }

    public function sort_timestart($type = null) {
        return $this->builder->orderBy('timeStart', (!$type || $type == 'asc') ? 'desc' : 'asc');
    }
}