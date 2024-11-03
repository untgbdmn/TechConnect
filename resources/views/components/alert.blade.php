<div id="flash-message"
    class="px-4 py-2 my-2 rounded-md shadow-lg text-white font-normal inline-flex items-center gap-2 absolute top-0 right-10 min-w-[400px]
    {{ $type == 'success' ? 'bg-[#10b981]' : 'bg-[#ef4444]' }}">
    @if($type == 'success')
        <x-bi-check-circle class="h-full w-5" />
    @elseif($type == 'failed')
        <x-bi-x-circle class="h-full w-5" />
    @endif
    {{ $message }}
</div>

<script>
    setTimeout(function() {
        var flashMessage = document.getElementById('flash-message');
        if (flashMessage) {
            flashMessage.style.display = 'none';
        }
    }, 2000);
</script>
