<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function create()
    {
        return view('admin.products.create');
    }

    public function store(Request $request)
    {
        // Validate the request
        $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'required|string|unique:products,slug',
            'description' => 'required|string',  // CKEditor data for description
            'category' => 'required|string',
            'images' => 'nullable|array',
            'images.*' => 'image|mimes:jpg,jpeg,png,gif,svg|max:2048',
            'more_details' => 'nullable|string', // CKEditor data for more details
            'meta_title' => 'nullable|string',
            'meta_description' => 'nullable|string', // CKEditor data for meta description
            'header_script' => 'nullable|string',
        ]);

        // Handle file upload and save image paths
        $imagePaths = [];
        if ($request->has('images')) {
            foreach ($request->file('images') as $image) {
                $imagePaths[] = $image->store('products', 'public');
            }
        }

        // Ensure CKEditor data is captured and assigned
        $description = $request->input('description');
        $more_details = $request->input('more_details');
        $meta_description = $request->input('meta_description');

        // Create a new product
        $product = Product::create([
            'title' => $request->title,
            'slug' => $request->slug,
            'description' => $description,  // Save CKEditor data for description
            'category' => $request->category,
            'images' => json_encode($imagePaths),  // Store image paths in JSON format
            'more_details' => $more_details, // Save CKEditor data for more details
            'meta_title' => $request->meta_title,
            'meta_description' => $meta_description, // Save CKEditor data for meta description
            'header_script' => $request->header_script,
        ]);

        // Return a JSON response with a success message
        return response()->json([
            'message' => 'Product created successfully!',
            'product' => $product
        ], 201);
    }
}
