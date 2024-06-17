<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<body>
    <ul id="menu">
        <!-- $tree is passed down from AtestController --> 
        @foreach ($tree as $item)
            @include('atest.dropdown-item', ['item' => $item])
        @endforeach
    </ul>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const togglers = document.querySelectorAll('.caret');
            togglers.forEach(toggler => {
                toggler.addEventListener('click', function () {
                    // toggle the selected item's 'active' status
                    this.parentElement.querySelector(".nested").classList.toggle("active");
                    // toggle the selected item's 'caret-down' status
                    // to show is as a sub-element 
                    this.classList.toggle("caret-down");
                });
            });
        });
    </script>
</body>
</html>
