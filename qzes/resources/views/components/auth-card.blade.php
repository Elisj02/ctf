<div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bck" style="background: linear-gradient(
    90deg,
    rgba(166, 207, 255, 0.5) 0%,
    rgba(172, 169, 251, 0.5) 35%,
    rgba(172, 126, 231, 0.5) 73%,
    rgba(209, 128, 229, 0.5) 110%
  );">
    <div>
        {{ $logo }}
    </div>

    <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
        {{ $slot }}
    </div>
</div>
