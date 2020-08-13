@extends('layouts.tailwind-ui')

@section('title', 'Slide-overs')

@section('content')
<div class="fixed inset-0 overflow-hidden">
    <div class="absolute inset-0 overflow-hidden">
        <section class="absolute inset-y-0 pl-16 max-w-full right-0 flex">
            <!--
          Slide-over panel, show/hide based on slide-over state.
  
          Entering: "transform transition ease-in-out duration-500 sm:duration-700"
            From: "translate-x-full"
            To: "translate-x-0"
          Leaving: "transform transition ease-in-out duration-500 sm:duration-700"
            From: "translate-x-0"
            To: "translate-x-full"
        -->
            <div class="w-screen max-w-md">
                <div class="h-full divide-y divide-gray-200 flex flex-col bg-white shadow-xl">
                    <div class="flex-1 h-0 overflow-y-auto">
                        <header class="space-y-1 py-6 px-4 bg-indigo-700 sm:px-6">
                            <div class="flex items-center justify-between space-x-3">
                                <h2 class="text-lg leading-7 font-medium text-white">
                                    New Project
                                </h2>
                                <div class="h-7 flex items-center">
                                    <button aria-label="Close panel"
                                        class="text-indigo-200 hover:text-white transition ease-in-out duration-150">
                                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M6 18L18 6M6 6l12 12" />
                                        </svg>
                                    </button>
                                </div>
                            </div>
                            <div>
                                <p class="text-sm leading-5 text-indigo-300">
                                    Get started by filling in the information below to create your new project.
                                </p>
                            </div>
                        </header>
                        <div class="flex-1 flex flex-col justify-between">
                            <div class="px-4 divide-y divide-gray-200 sm:px-6">
                                <div class="space-y-6 pt-6 pb-5">
                                    <div class="space-y-1">
                                        <label for="project_name"
                                            class="block text-sm font-medium leading-5 text-gray-900">
                                            Project name
                                        </label>
                                        <div class="relative rounded-md shadow-sm">
                                            <input id="project_name"
                                                class="form-input block w-full sm:text-sm sm:leading-5 transition ease-in-out duration-150" />
                                        </div>
                                    </div>
                                    <div class="space-y-1">
                                        <label for="description"
                                            class="block text-sm font-medium leading-5 text-gray-900">
                                            Description
                                        </label>
                                        <div class="relative rounded-md shadow-sm">
                                            <textarea id="description" rows="4"
                                                class="form-input block w-full sm:text-sm sm:leading-5 transition ease-in-out duration-150"></textarea>
                                        </div>
                                    </div>
                                    <div class="space-y-2">
                                        <h3 class="text-sm font-medium leading-5 text-gray-900">
                                            Team Members
                                        </h3>
                                        <div>
                                            <div class="flex space-x-2">
                                                <a href="#">
                                                    <img class="inline-block h-8 w-8 rounded-full"
                                                        src="https://images.unsplash.com/photo-1491528323818-fdd1faba62cc?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                                        alt="Tom Warner" />
                                                </a>
                                                <a href="#">
                                                    <img class="inline-block h-8 w-8 rounded-full"
                                                        src="https://images.unsplash.com/photo-1550525811-e5869dd03032?ixlib=rb-1.2.1&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                                        alt="Sally Preston" />
                                                </a>
                                                <a href="#">
                                                    <img class="inline-block h-8 w-8 rounded-full"
                                                        src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2.25&w=256&h=256&q=80"
                                                        alt="Dave Gusman" />
                                                </a>
                                                <a href="#">
                                                    <img class="inline-block h-8 w-8 rounded-full"
                                                        src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                                        alt="Tom Cook" />
                                                </a>
                                                <a href="#">
                                                    <img class="inline-block h-8 w-8 rounded-full"
                                                        src="https://images.unsplash.com/photo-1586297098710-0382a496c814?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2.5&w=256&h=256&q=80"
                                                        alt="Brandon Rogers" />
                                                </a>
                                                <button type="button"
                                                    class="inline-flex h-8 w-8 items-center justify-center rounded-full border-2 border-dashed border-gray-200 text-gray-400 hover:text-gray-500 transition ease-in-out duration-150"
                                                    aria-label="Add team member">
                                                    <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                                        <path fill-rule="evenodd"
                                                            d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z"
                                                            clip-rule="evenodd" />
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <fieldset class="space-y-2">
                                        <legend class="text-sm leading-5 font-medium text-gray-900">
                                            Privacy
                                        </legend>
                                        <div class="space-y-5">
                                            <div class="relative flex items-start">
                                                <div class="absolute flex items-center h-5">
                                                    <input id="privacy_public"
                                                        aria-describedby="privacy_public_description" type="radio"
                                                        name="privacy"
                                                        class="form-radio h-4 w-4 text-indigo-600 transition duration-150 ease-in-out" />
                                                </div>
                                                <div class="pl-7 text-sm leading-5">
                                                    <label for="privacy_public" class="font-medium text-gray-900">
                                                        Public access
                                                    </label>
                                                    <p id="privacy_public_description" class="text-gray-500">
                                                        Everyone with the link will see this project.
                                                    </p>
                                                </div>
                                            </div>
                                            <div>
                                                <div class="relative flex items-start">
                                                    <div class="absolute flex items-center h-5">
                                                        <input id="privacy_private-to-project"
                                                            aria-describedby="privacy_private-to-project_description"
                                                            type="radio" name="privacy"
                                                            class="form-radio h-4 w-4 text-indigo-600 transition duration-150 ease-in-out" />
                                                    </div>
                                                    <div class="pl-7 text-sm leading-5">
                                                        <label for="privacy_private-to-project"
                                                            class="font-medium text-gray-900">
                                                            Private to project members
                                                        </label>
                                                        <p id="privacy_private-to-project_description"
                                                            class="text-gray-500">
                                                            Only members of this project would be able to access.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                                <div class="relative flex items-start">
                                                    <div class="absolute flex items-center h-5">
                                                        <input id="privacy_private"
                                                            aria-describedby="privacy_private-to-project_description"
                                                            type="radio" name="privacy"
                                                            class="form-radio h-4 w-4 text-indigo-600 transition duration-150 ease-in-out" />
                                                    </div>
                                                    <div class="pl-7 text-sm leading-5">
                                                        <label for="privacy_private" class="font-medium text-gray-900">
                                                            Private to you
                                                        </label>
                                                        <p id="privacy_private_description" class="text-gray-500">
                                                            You are the only one able to access this project.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>
                                </div>
                                <div class="space-y-4 pt-4 pb-6">
                                    <div class="flex text-sm leading-5">
                                        <a href="#"
                                            class="group space-x-2 inline-flex items-center font-medium text-indigo-600 hover:text-indigo-500 transition ease-in-out duration-150">
                                            <svg class="h-5 w-5 text-indigo-500 group-hover:text-indigo-400 transition ease-in-out duration-150"
                                                viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd"
                                                    d="M12.586 4.586a2 2 0 112.828 2.828l-3 3a2 2 0 01-2.828 0 1 1 0 00-1.414 1.414 4 4 0 005.656 0l3-3a4 4 0 00-5.656-5.656l-1.5 1.5a1 1 0 101.414 1.414l1.5-1.5zm-5 5a2 2 0 012.828 0 1 1 0 101.414-1.414 4 4 0 00-5.656 0l-3 3a4 4 0 105.656 5.656l1.5-1.5a1 1 0 10-1.414-1.414l-1.5 1.5a2 2 0 11-2.828-2.828l3-3z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                            <span>
                                                Copy link
                                            </span>
                                        </a>
                                    </div>
                                    <div class="flex text-sm leading-5">
                                        <a href="#"
                                            class="group space-x-2 inline-flex items-center text-gray-500 hover:text-gray-900 transition ease-in-out duration-150">
                                            <svg class="h-5 w-5 text-gray-400 group-hover:text-gray-500 transition ease-in-out duration-150"
                                                viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd"
                                                    d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                            <span>
                                                Learn more about sharing
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex-shrink-0 px-4 py-4 space-x-4 flex justify-end">
                        <span class="inline-flex rounded-md shadow-sm">
                            <button type="button"
                                class="py-2 px-4 border border-gray-300 rounded-md text-sm leading-5 font-medium text-gray-700 hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-gray-50 active:text-gray-800 transition duration-150 ease-in-out">
                                Cancel
                            </button>
                        </span>
                        <span class="inline-flex rounded-md shadow-sm">
                            <button type="submit"
                                class="inline-flex justify-center py-2 px-4 border border-transparent text-sm leading-5 font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-indigo-700 transition duration-150 ease-in-out">
                                Save
                            </button>
                        </span>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
@endsection
