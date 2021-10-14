@props(['attributeContent', 'attributeName','fontName'])
<div class="w-full md:w-1/2 xl:w-1/3 p-1">
    <div class="bg-gradient-to-b from-gray-200 to-gray-100 border-b-4 border-blue-600 rounded-lg shadow-xl p-5">
        <div class="flex flex-row items-center">
            <div class="flex-shrink pr-4">
                <div class="rounded-full p-5 bg-blue-600"><i class="fas fa-{{$fontName}} fa-2x fa-inverse"></i></div>
            </div>
            <div class="flex-1 text-right md:text-center">
                <h5 class="font-bold uppercase text-gray-600">{{$attributeName}}</h5>
                <h3 class="font-bold text-3xl">{{$attributeContent}}</h3>
            </div>
        </div>
    </div>
</div>