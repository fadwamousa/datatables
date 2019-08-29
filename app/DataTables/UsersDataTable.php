<?php

namespace App\DataTables;

use App\User;
use Yajra\DataTables\Services\DataTable;

class UsersDataTable extends DataTable
{

    public function dataTable($query)
    {
        return datatables($query)
            ->addColumn('action', 'usersdatatable.action');
    }

    public function query()
    {
        $users = User::select();

        return $this->applyScopes($users);
    }
    public function ajax()
    {
        return $this->datatables
            ->eloquent($this->query())
            ->make(true);
    }

    public function html()
    {
        return $this->builder()
            ->columns([
                'id',
                'name',
                'email',
                'created_at',
                'updated_at',
            ])
            ->parameters([
                'dom' => 'Bfrtip',
                'buttons' => ['csv', 'excel', 'pdf', 'print', 'reset', 'reload'],
            ]);
    }
    protected function getColumns()
    {
        return [
            'id',
            'add your columns',
            'created_at',
            'updated_at'
        ];
    }


    protected function filename()
    {
        return 'Users_' . date('YmdHis');
    }
}
