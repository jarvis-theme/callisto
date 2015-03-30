<!-- Default js -->
{{--HTML::script(dirTemaToko().'callisto/assets/js/lib/jquery.min.js')--}}
{{--HTML::script(dirTemaToko().'callisto/assets/js/lib/jquery.placeholder.min.js')--}}
{{--HTML::script(dirTemaToko().'callisto/assets/js/lib/jquery.uniform.js')--}}
{{--HTML::script(dirTemaToko().'callisto/assets/js/lib/global.js')--}}
{{--HTML::script(dirTemaToko().'callisto/assets/js/lib/jquery.cycle.all.js')--}}
{{--HTML::script(dirTemaToko().'callisto/assets/js/lib/bootstrap.min.js')--}}

<!-- jika dibutuhkan -->
{{--HTML::script('themes/callisto/assets/js/bootstrap.min.js')--}}

<script data-main="http://{{Request::server('SERVER_NAME').'/'.dirTemaToko()}}callisto/assets/js/app-main" src="/js/require.js"></script>