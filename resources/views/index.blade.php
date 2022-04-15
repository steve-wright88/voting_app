<!-- copy the dashboard code as it extends the app layout -->
<x-app-layout>
    <div class="filters flex space-x-6">
        <div class="w-1/4">
            <select name="category" id="category" class="w-full border-gray-500 text-gray-500 rounded-md px-2 py-1">
                <option value="Category One">Category One</option>
                <option value="Category Two">Category Two</option>
                <option value="Category Three">Category Three</option>
                <option value="Category Four">Category Four</option>
            </select>
        </div>
        <div class="w-1/4">
            <select name="other_filters" id="other_filters" class="w-full border-gray-300 text-gray-500 rounded-md px-2 py-1">
                <option value="Filter One">Filter One</option>
                <option value="Filter Two">Filter Two</option>
                <option value="Filter Three">Filter Three</option>
                <option value="Filter Four">Filter Four</option>
            </select>
        </div>
        <div class="w-2/4 relative">
            <input type="search" placeholder="Find an idea" class="w-full border-gray-300 text-gray-500 placeholder:text-gray-500 rounded-md px-2 py-1 pl-8">
            <div class="absolute top-0 flex items-center h-full ml-2">
                <svg class="w-4 text-gray-500" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                </svg>
            </div>
        </div>
    </div> <!-- end filters -->
</x-app-layout>