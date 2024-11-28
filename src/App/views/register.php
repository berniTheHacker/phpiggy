<?php include $this->resolve("partials/_header.php"); ?>
<section
  class="max-w-2xl mx-auto mt-12 p-4 bg-white shadow-md border border-gray-200 rounded"
>
  <form class="grid grid-cols-1 gap-6"> 
    <!-- Email -->
    <label class="block">
      <span class="text-gray-700">Email address</span>
      <input
        type="email"
        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
        placeholder="john@example.com"
      />
    </label>
    <!-- Age -->
    <label class="block">
      <span class="text-gray-700">Age</span>
      <input
        type="number"
        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
        placeholder=""
      />
    </label>
    <!-- Country -->
    <label class="block">
      <span class="text-gray-700">Country</span>
      <select
        class="block w-full mt-1 rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
      >
        <option value="USA">USA</option>
        <option value="Canada">Canada</option>
        <option value="Mexico">Mexico</option>
        <option value="Invalid">Invalid Country</option>
      </select>
    </label>
    <!-- Social Media URL -->
    <label class="block">
      <span class="text-gray-700">Social Media URL</span>
      <input
        type="text"
        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
        placeholder=""
      />
    </label>
    <!-- Password -->
    <label class="block">
      <span class="text-gray-700">Password</span>
      <input
        type="password"
        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
        placeholder=""
      />
    </label>
    <!-- Confirm Password -->
    <label class="block">
      <span class="text-gray-700">Confirm Password</span>
      <input
        type="password"
        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
        placeholder=""
      />
    </label>
    <!-- Terms of Service -->
    <div class="block">
      <div class="mt-2">
        <div>
          <label class="inline-flex items-center">
            <input
              class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-offset-0 focus:ring-indigo-200 focus:ring-opacity-50"
              type="checkbox"
            />
            <span class="ml-2">I accept the terms of service.</span>
          </label>
        </div>
      </div>
    </div>
    <button
      type="submit"
      class="block w-full py-2 bg-indigo-600 text-white rounded"
    >
      Submit
    </button>
  </form>
</section>

<?php include $this->resolve("partials/_footer.php"); ?>