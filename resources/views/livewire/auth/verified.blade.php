<div x-data="{
    seconds: 5,
    redirectUrl: '{{ $redirectUrl }}'
}" x-init="let interval = setInterval(() => {
    if (seconds > 1) {
        seconds--;
    } else {
        clearInterval(interval);
        window.location.href = redirectUrl;
    }
}, 1000);"
    class="flex flex-col items-center justify-center h-screen text-center">
    <svg viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" fill="#000000" class="w-20 h-20">
        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
        <g id="SVGRepo_iconCarrier">
            <g id="layer1">
                <path
                    d="M 2 3 L 2 4 L 19 4 L 19 11.050781 C 19.140925 11.021974 19.284143 11.000133 19.429688 10.996094 C 19.624569 10.990749 19.814149 11.017059 20 11.058594 L 20 3 L 2 3 z M 0 5 L 0 17 L 8.0488281 17 C 8.0003061 16.790054 7.9700001 16.578371 7.9804688 16.373047 C 7.9871293 16.24241 8.010572 16.121023 8.0351562 16 L 1.6621094 16 L 6.6367188 12.251953 L 5.8046875 11.626953 L 1 15.246094 L 1 6.7539062 L 7.9863281 12.017578 L 10.013672 12.017578 L 17 6.7539062 L 17 12.458984 L 17.710938 11.748047 C 17.799771 11.657128 17.89953 11.579511 18 11.503906 L 18 5 L 0 5 z M 1.6621094 6 L 16.337891 6 L 9.6796875 11.017578 L 8.3203125 11.017578 L 1.6621094 6 z M 12.195312 11.626953 L 11.363281 12.251953 L 14.695312 14.763672 L 15.410156 14.048828 L 12.195312 11.626953 z M 19.484375 12.996094 C 19.354615 12.999694 19.231345 13.053634 19.140625 13.146484 L 13.494141 18.792969 L 10.847656 16.146484 C 10.376401 15.655678 9.6498182 16.382262 10.140625 16.853516 L 13.140625 19.853516 C 13.33589 20.0487 13.652391 20.0487 13.847656 19.853516 L 19.847656 13.853516 C 20.172926 13.535513 19.939096 12.983623 19.484375 12.996094 z "
                    style="fill:#476cff; fill-opacity:1; stroke:none; stroke-width:0px;"></path>
            </g>
        </g>
    </svg>
    <h1 class="text-2xl font-semibold mt-6">Email successfully Verified</h1>
    <h4 class="text-md mt-1 text-gray-700">Redirecting in <span x-text="seconds"></span> seconds...</h4>
    <a href="/" class="mt-5 text-blue-600 underline">Redirect Now</a>
</div>
