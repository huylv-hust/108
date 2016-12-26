<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class User extends Model
{
    protected $table = 'user';
    protected $fields = ['name'];
    private $obj;

    public function getAllCity()
    {
        $result = User::all();
        return $result;
    }

    public function setData($data = array(), $obj)
    {
        $this->obj = $obj;
        foreach ($this->fields as $k => $v) {
            $this->obj->$v = isset($data[$v]) && $data[$v] !== '' ? trim($data[$v]) : null;
        }
    }

    public function saveData()
    {
        return $this->obj->save();
    }

    public function getList($filter = [])
    {
        $query = DB::table($this->table);
        if(isset($filter['name']) && $filter['name'])
        {
            $query->where('name', 'like', '%'.$filter['name'].'%');
        }

        return $query->paginate(20);
    }

    public function checkLogin($filter = [])
    {
        $query = DB::table($this->table);
        $query->where('username',$filter['username']);
        $query->where('password',$filter['password']);

        return $query->get();
    }
}