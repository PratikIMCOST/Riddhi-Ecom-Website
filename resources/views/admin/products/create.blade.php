<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Add Product') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h1 class="text-lg font-bold mb-4">Add New Product</h1>
                    <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data" id="productForm">
                        @csrf

                        <!-- Title -->
                        <div class="mb-4">
                            <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
                            <input type="text" id="title" name="title" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" required>
                        </div>

                        <!-- Slug -->
                        <div class="mb-4">
                            <label for="slug" class="block text-sm font-medium text-gray-700">Slug</label>
                            <input type="text" id="slug" name="slug" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" required>
                        </div>

                        <!-- Description -->
                        <div class="mb-4">
                            <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
                            <textarea id="description" name="description" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" required></textarea>
                        </div>

                        <!-- Category -->
                        <div class="mb-4">
                            <label for="category" class="block text-sm font-medium text-gray-700">Category</label>
                            <select id="category" name="category" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" required>
                                <option value="category1">Category 1</option>
                                <option value="category2">Category 2</option>
                                <option value="category3">Category 3</option>
                            </select>
                        </div>

                        <!-- Images -->
                        <div class="mb-4">
                            <label for="images" class="block text-sm font-medium text-gray-700">Product Images</label>
                            <input type="file" id="images" name="images[]" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" multiple>
                        </div>

                        <!-- More Details -->
                        <div class="mb-4">
                            <label for="more_details" class="block text-sm font-medium text-gray-700">More Details</label>
                            <textarea id="more_details" name="more_details" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm"></textarea>
                        </div>

                        <!-- Meta Title -->
                        <div class="mb-4">
                            <label for="meta_title" class="block text-sm font-medium text-gray-700">Meta Title</label>
                            <input type="text" id="meta_title" name="meta_title" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
                        </div>

                        <!-- Meta Description -->
                        <div class="mb-4">
                            <label for="meta_description" class="block text-sm font-medium text-gray-700">Meta Description</label>
                            <textarea id="meta_description" name="meta_description" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm"></textarea>
                        </div>

                        <!-- Header Script -->
                        <div class="mb-4">
                            <label for="header_script" class="block text-sm font-medium text-gray-700">Header Script</label>
                            <textarea id="header_script" name="header_script" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm"></textarea>
                        </div>

                        <button type="submit" class="px-4 py-2 bg-blue-600 text-black rounded-md">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- CKEditor 5 Script -->
    
    <script src="https://cdn.jsdelivr.net/npm/@ckeditor/ckeditor5-build-classic@39.0.2/build/ckeditor.js"></script>


    <script>
       document.addEventListener("DOMContentLoaded", function () {
    // Initialize CKEditor for description
    ClassicEditor.create(document.querySelector('#description'))
        .then(editor => {
            const form = document.querySelector('#productForm');
            form.addEventListener('submit', (e) => {
                const descriptionTextarea = document.querySelector('#description');
                const descriptionContent = editor.getData();

                if (descriptionContent.trim() === '') {
                    e.preventDefault(); // Stop form submission
                    alert('The description field is required.');
                    editor.editing.view.focus(); // Focus on CKEditor
                } else {
                    descriptionTextarea.value = descriptionContent; // Update textarea with content
                }
            });
        })
        .catch(error => console.error(error));

    // Repeat similar initialization for other fields
    ClassicEditor.create(document.querySelector('#more_details'))
        .then(editor => {
            const form = document.querySelector('#productForm');
            form.addEventListener('submit', (e) => {
                const moreDetailsTextarea = document.querySelector('#more_details');
                const moreDetailsContent = editor.getData();

                if (moreDetailsContent.trim() === '') {
                    e.preventDefault();
                    alert('The more details field is required.');
                    editor.editing.view.focus();
                } else {
                    moreDetailsTextarea.value = moreDetailsContent;
                }
            });
        })
        .catch(error => console.error(error));

    ClassicEditor.create(document.querySelector('#meta_description'))
        .then(editor => {
            const form = document.querySelector('#productForm');
            form.addEventListener('submit', () => {
                const metaDescriptionTextarea = document.querySelector('#meta_description');
                metaDescriptionTextarea.value = editor.getData();
            });
        })
        .catch(error => console.error(error));
});

       </script>
</x-app-layout>
