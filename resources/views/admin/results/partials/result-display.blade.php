@extends('admin.layouts.admin-app')

@foreach ($results as $categoryId => $resultsGroup)
    @include('admin.results.partials.category_' . $categoryId, ['results' => $resultsGroup, 'categoryId' => $categoryId])
{{--    @if($categoryId === 1)--}}
{{--        @isset($category_1)--}}
{{--            @include('$admin.results.partials.category_1', ['results' => $resultsGroup, 'categoryId' => $categoryId])--}}
{{--        @endisset--}}
{{--    @endif--}}
{{--    @if($categoryId === 2)--}}
{{--        @isset($category_2)--}}
{{--            @include('$admin.results.partials.category_2', ['results' => $resultsGroup, 'categoryId' => $categoryId])--}}
{{--        @endisset--}}
{{--    @endif--}}
@endforeach
