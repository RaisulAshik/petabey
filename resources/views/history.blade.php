@extends('layouts.layouts')
@section('content')
    <div class="w-full p-12">
        <div class="pb-4">
            Access Control
        </div>
        <div class="flex">
            <div class="w-2/3">
                <label class="relative block">
                    <span class="sr-only">Search</span>
                    <input class="placeholder:italic placeholder:text-slate-400 block bg-white w-full border rounded-md py-2 pl-9 pr-3 shadow-sm focus:outline-none focus:ed-500 focus:ring-red-500 focus:ring-1 sm:text-sm" placeholder="Search for anything..." type="text" name="search"/>
                    <span class="absolute inset-y-0 left-0 flex items-center pl-2">
                        <img src="{{Request::root()}}/img/Search.png"/>
                    </span>
                </label>
            </div>
            <div class="w-1/6 pl-4 text-right">
                <button id="dropdownDefault" data-dropdown-toggle="dropdownId" class="bg-slate-100 hover:bg-slate-100 focus:ring-4 focus:outline-none focus:ring-slate-300 font-medium rounded-lg text-sm px-4 py-2.5 text-center inline-flex items-center dark:bg-slate-100 dark:hover:bg-slate-100 dark:focus:ring-slate-800" type="button">Select Month<svg class="ml-2 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg></button>
                <!-- Dropdown menu -->
                <div id="dropdownId" class="hidden z-10 w-44 bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700">
                    <ul class="py-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefault">
                    <li>
                        <a href="#" class="block py-2 px-4 text-center hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Dashboard</a>
                    </li>
                    <li>
                        <a href="#" class="block py-2 px-4 text-center hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Settings</a>
                    </li>
                    <li>
                        <a href="#" class="block py-2 px-4 text-center hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Earnings</a>
                    </li>
                    <li>
                        <a href="#" class="block py-2 px-4 text-center hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Sign out</a>
                    </li>
                    </ul>
                </div>
            </div>
            <div class="w-1/6 pl-4 text-right">
                            
                <button id="dropdownDefault" data-dropdown-toggle="dropdown" class="bg-slate-100 hover:bg-slate-100 focus:ring-4 focus:outline-none focus:ring-slate-300 font-medium rounded-lg text-sm px-4 py-2.5 text-center inline-flex items-center dark:bg-slate-600 dark:hover:bg-slate-100 dark:focus:ring-slate-800" type="button">Select Year <svg class="ml-2 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg></button>

                <div id="dropdown" class="hidden z-10 w-44 bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700" style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate3d(391.2px, 681.6px, 0px);" data-popper-placement="bottom">
                    <ul class="py-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefault">
                        <li>
                            <a href="#" class="block py-2 px-4 text-center hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">2022</a>
                        </li>
                        <li>
                            <a href="#" class="block py-2 px-4 text-center hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">2021</a>
                        </li>
                        <li>
                            <a href="#" class="block py-2 px-4 text-center hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">2020</a>
                        </li>
                        <li>
                            <a href="#" class="block py-2 px-4 text-center hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">2019</a>
                        </li>
                        <li>
                            <a href="#" class="block py-2 px-4 text-center hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">2018</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="w-1/6 pl-4 text-right">
                <button id="dropdownDefault" data-dropdown-toggle="dropdownBill" class="bg-slate-100 hover:bg-slate-100 focus:ring-4 focus:outline-none focus:ring-slate-300 font-medium rounded-lg text-sm px-4 py-2.5 text-center inline-flex items-center dark:bg-slate-600 dark:hover:bg-slate-100 dark:focus:ring-slate-800" type="button">Select Field <svg class="ml-2 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg></button>

                <div id="dropdownBill" class="hidden z-10 w-44 bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700" style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate3d(391.2px, 681.6px, 0px);" data-popper-placement="bottom">
                    <ul class="py-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefault">
                        <li>
                            <a href="#" class="block py-2 px-4 text-center hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Electricity</a>
                        </li>
                        <li>
                            <a href="#" class="block py-2 px-4 text-center hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Water</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="flex flex-col pt-4">
            <div class="py-2 -my-2 overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8">
                <div class="inline-block min-w-full overflow-hidden align-middle border-b border-gray-200 shadow ">
                    <table class="min-w-full">
                        <thead class="text-sm font-medium bg-greencust5 h-14">
                            <tr>
                                <th class="px-5 py-3 text-center text-tundora  border-graydark4">
                                    Invoice Name
                                </th>
                                <th class="px-5 py-3 text-center text-tundora  border-graydark4">
                                    Invoice No
                                </th>
                                <th class="px-5 py-3 text-center text-tundora  border-graydark4">
                                    Address
                                </th>
                                <th class="px-5 py-3 text-center text-tundora  border-graydark4">
                                    House Type
                                </th>
                                <th class="px-3 py-3 text-center text-tundora  border-graydark4">
                                    Price
                                </th>
                                <th class="px-3 py-3 text-center text-tundora  border-graydark4">
                                    Date
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
                                <td class="px-5 py-3 text-center text-gray-500  border-graydark4">
                                    JD#012
                                </td>
                                <td class="px-5 py-3 text-center text-gray-500  border-graydark4">
                                    Dhaka, Bangladesh
                                </td>
                                <td class="px-5 py-3 text-center text-gray-500  border-graydark4">
                                    Hotel
                                </td>
                                <td class="px-5 py-3 text-center text-gray-500  border-graydark4">
                                    $715
                                </td>
                                <td class="px-5 py-3 text-center text-gray-500  border-graydark4">
                                    March,2022
                                </td>
                                <td class="px-5 py-3 text-center text-gray-500  border-graydark4">
                                    <button type="button" class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Print</button>
                                </td>
                                
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@stop
