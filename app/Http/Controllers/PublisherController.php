<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Models\PublisherWebsite;

class PublisherController extends Controller
{
    public function index(){
        return view('publisher.home');
    }

    public function web(){
        $websites = PublisherWebsite::all();
        return view('publisher.website' , compact('websites'));
    }

    public function store(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'url' => 'required|url',
                'country' => 'required',
                'image_per_post' => 'required|in:1,2,3,4,5', 
                'maximum_links' => 'required|in:1,2,3,4', 
                'type_of_links' => 'required|array',
                'type_of_links.*' => 'required|in:Follow,No Follow,Sponsored',
                'web_categories' => 'required|array|max:3',
                'web_categories.*' => 'required|string', 
                'delicated_topics' => 'nullable|array',
                'delicated_topics.*' => 'nullable|string',
                'sponsor' => 'required|in:Always,Ony if its noticed',
                'normal_price' => 'required|numeric|min:1',
                'topic_price' => 'nullable|numeric|min:1',
                'eight_hundred' => 'nullable|numeric|min:1',
                'one_thousand' => 'nullable|numeric|min:1',
                'twelve_hundred' => 'nullable|numeric|min:1',
                'facebook' => 'nullable|string',
                'twitter' => 'nullable|string',
                'linkedin' => 'nullable|string',
                'price_per_diffusion' => 'nullable|numeric|min:1',
            ]);
    
            $validatedData['web_categories'] = json_encode($request->input('web_categories') ?? []);
            $validatedData['type_of_links'] = json_encode($request->input('type_of_links') ?? []);
            $validatedData['delicated_topics'] = json_encode($request->input('delicated_topics') ?? []);

    
            $publisherWebsite = new PublisherWebsite();
    
            $publisherWebsite->url = $validatedData['url'];
            $publisherWebsite->country = $validatedData['country'];
            $publisherWebsite->image_per_post = $validatedData['image_per_post'];
            $publisherWebsite->maximum_links = $validatedData['maximum_links'];
            $publisherWebsite->type_of_links = $validatedData['type_of_links'];
            $publisherWebsite->web_categories = $validatedData['web_categories'];
            $publisherWebsite->delicated_topics = $validatedData['delicated_topics'];
            $publisherWebsite->sponsor = $validatedData['sponsor'];
            $publisherWebsite->normal_price = $validatedData['normal_price'];
            $publisherWebsite->topic_price = $validatedData['topic_price'];
            $publisherWebsite->eight_hundred = $validatedData['eight_hundred'];
            $publisherWebsite->one_thousand = $validatedData['one_thousand'];
            $publisherWebsite->twelve_hundred = $validatedData['twelve_hundred'];
            $publisherWebsite->facebook = $validatedData['facebook'];
            $publisherWebsite->twitter = $validatedData['twitter'];
            $publisherWebsite->linkedin = $validatedData['linkedin'];
            $publisherWebsite->price_per_diffusion = $validatedData['price_per_diffusion'];
            $publisherWebsite->save();
            return redirect()->route('web')->with('success', 'Website details saved successfully!');

        } catch (\Exception $e) {
            Log::error('Error storing website details: ' . $e->getMessage());

            return redirect()->back()->with('error', 'Failed to save website details. Please try again later.');
        }
    }
    

    public function postweb(){
        return view('publisher.postweb');
    }

    public function delete($id) {
        try {
            $website = PublisherWebsite::findOrFail($id);
            $website->delete();
            return response()->json(['success' => true]);
        } catch (\Exception $e) {
            Log::error('Error deleting website: ' . $e->getMessage());
            return response()->json(['success' => false, 'error' => 'Error deleting website.']);
        }
    }

    public function home(){
        return view('publisher.index');
    }
    
}
