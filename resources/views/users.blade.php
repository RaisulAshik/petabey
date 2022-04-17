@extends('layouts.layouts')
@section('content')
    <div class="w-full p-12">
        <div class="pb-4">
            Access Control
        </div>
        <div class="flex">
            <div class="w-5/6">
                <label class="relative block">
                    <span class="sr-only">Search</span>
                    <input class="placeholder:italic placeholder:text-slate-400 block bg-white w-full border rounded-md py-2 pl-9 pr-3 shadow-sm focus:outline-none focus:ed-500 focus:ring-red-500 focus:ring-1 sm:text-sm" placeholder="Search for anything..." type="text" name="search"/>
                    <span class="absolute inset-y-0 left-0 flex items-center pl-2">
                        <img src="{{Request::root()}}/img/Search.png"/>
                    </span>
                </label>
            </div>
            <div class="w-1/6 pl-4 text-right">
                <button type="button" class="bg-red-600 p-2 rounded-lg text-white"> + Add New </button>
            </div>
        </div>
        <div class="flex flex-col pt-4">
            <div class="py-2 -my-2 overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8">
                <div class="inline-block min-w-full overflow-hidden align-middle border-b border-gray-200 shadow ">
                    <table class="min-w-full">
                        <thead class="text-sm font-medium bg-greencust5 h-14">
                            <tr>
                                <th class="px-5 py-3 text-center text-tundora  border-graydark4">
                                    Employee Name
                                </th>
                                <th class="px-5 py-3 text-left text-tundora  border-graydark4">
                                    Email
                                </th>
                                <th class="px-5 py-3 text-left text-tundora  border-graydark4">
                                    Address
                                </th>
                                <th class="px-5 py-3 text-left text-tundora  border-graydark4">
                                    Role
                                </th>
                                <th class="px-3 py-3 text-center text-tundora  border-graydark4">
                                    Action
                                </th>
                            </tr>
                        </thead>
                        <tbody class="text-sm bg-white h-14">
                            <tr class="border border-graydark4">
                                <td class="px-5 py-3 text-center text-tundora font-medium  border-graydark4">
                                    <div class="flex">
                                        <div class="pr-1">
                                            <img src=""/>
                                        </div>
                                        <div class="pl-1">
                                            Riad Hossain1
                                        </div>
                                    </div>
                                </td>
                                <td class="px-5 py-3 text-left text-gray-500  border-graydark4">
                                    riad@gmail.com
                                </td>
                                <td class="px-5 py-3 text-left text-gray-500  border-graydark4">
                                    Dhaka, Bangladesh
                                </td>
                                <td class="px-5 py-3 text-left text-gray-500  border-graydark4">
                                    Designer
                                </td>
                                <td class="px-5 py-3 text-left text-gray-500  border-graydark4">
                                    <div class="flex justify-center">
                                        <div class="pr-1">
                                            <img src="{{Request::root()}}/img/Unlock.png" />
                                        </div>
                                        <div class="pl-1">
                                            <img src="{{Request::root()}}/img/Edit.png" />
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@stop
