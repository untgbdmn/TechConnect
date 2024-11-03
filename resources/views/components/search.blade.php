<div>
    <form action="{{ $action }}" method="GET" id="searchForm">
        <div class="w-full flex flex-row gap-2">
            <input
                class="w-full bg-primary placeholder:text-white text-white text-sm border border-slate-200 rounded-md py-1 transition duration-300 ease focus:outline-none focus:border-slate-400 hover:border-slate-300 shadow-sm focus:shadow"
                placeholder="Search..." name="search" id="search" type="search">
            <button type="submit" class="bg-primary text-white rounded-md px-5">
                Search
            </button>
        </div>
    </form>

    <script>
        document.getElementById('search').addEventListener('keypress', function(event) {
            if (event.key === 'Enter') {
                event.preventDefault();
                document.getElementById('searchForm').submit();
            }
        });
    </script>
</div>
