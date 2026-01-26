<x-layouts::app :title="__('Settings')">
    <div class="space-y-8">
        <!-- Profile Settings -->
        <div class="glass-effect rounded-xl p-6">
            <h3 class="text-xl font-bold text-white mb-6">Profile Information</h3>

            <form class="space-y-6">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-sm font-medium text-gray-300 mb-2">Full Name</label>
                        <input type="text" value="{{ $data['profile']['name'] }}"
                               class="w-full px-4 py-3 bg-slate-800/50 border border-slate-600 rounded-lg text-white focus:border-primary focus:ring-1 focus:ring-primary outline-none transition-colors">
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-300 mb-2">Email Address</label>
                        <input type="email" value="{{ $data['profile']['email'] }}"
                               class="w-full px-4 py-3 bg-slate-800/50 border border-slate-600 rounded-lg text-white focus:border-primary focus:ring-1 focus:ring-primary outline-none transition-colors">
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-300 mb-2">Phone Number</label>
                        <input type="tel" value="{{ $data['profile']['phone'] }}"
                               class="w-full px-4 py-3 bg-slate-800/50 border border-slate-600 rounded-lg text-white focus:border-primary focus:ring-1 focus:ring-primary outline-none transition-colors">
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-300 mb-2">Location</label>
                        <input type="text" value="{{ $data['profile']['location'] }}"
                               class="w-full px-4 py-3 bg-slate-800/50 border border-slate-600 rounded-lg text-white focus:border-primary focus:ring-1 focus:ring-primary outline-none transition-colors">
                    </div>
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-300 mb-2">Bio</label>
                    <textarea rows="4"
                              class="w-full px-4 py-3 bg-slate-800/50 border border-slate-600 rounded-lg text-white focus:border-primary focus:ring-1 focus:ring-primary outline-none transition-colors resize-none">{{ $data['profile']['bio'] }}</textarea>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <div>
                        <label class="block text-sm font-medium text-gray-300 mb-2">Website URL</label>
                        <input type="url" value="{{ $data['profile']['website'] }}"
                               class="w-full px-4 py-3 bg-slate-800/50 border border-slate-600 rounded-lg text-white focus:border-primary focus:ring-1 focus:ring-primary outline-none transition-colors">
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-300 mb-2">GitHub URL</label>
                        <input type="url" value="{{ $data['profile']['github'] }}"
                               class="w-full px-4 py-3 bg-slate-800/50 border border-slate-600 rounded-lg text-white focus:border-primary focus:ring-1 focus:ring-primary outline-none transition-colors">
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-300 mb-2">LinkedIn URL</label>
                        <input type="url" value="{{ $data['profile']['linkedin'] }}"
                               class="w-full px-4 py-3 bg-slate-800/50 border border-slate-600 rounded-lg text-white focus:border-primary focus:ring-1 focus:ring-primary outline-none transition-colors">
                    </div>
                </div>

                <div class="flex justify-end">
                    <button type="submit" class="bg-gradient-to-r from-primary to-secondary px-6 py-3 rounded-lg text-white font-semibold hover:from-secondary hover:to-primary transition-all duration-300">
                        <i class="fas fa-save mr-2"></i>
                        Update Profile
                    </button>
                </div>
            </form>
        </div>

        <!-- Site Settings -->
        <div class="glass-effect rounded-xl p-6">
            <h3 class="text-xl font-bold text-white mb-6">Site Settings</h3>

            <form class="space-y-6">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-sm font-medium text-gray-300 mb-2">Site Title</label>
                        <input type="text" value="{{ $data['site_settings']['site_title'] }}"
                               class="w-full px-4 py-3 bg-slate-800/50 border border-slate-600 rounded-lg text-white focus:border-primary focus:ring-1 focus:ring-primary outline-none transition-colors">
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-300 mb-2">Contact Email</label>
                        <input type="email" value="{{ $data['site_settings']['contact_email'] }}"
                               class="w-full px-4 py-3 bg-slate-800/50 border border-slate-600 rounded-lg text-white focus:border-primary focus:ring-1 focus:ring-primary outline-none transition-colors">
                    </div>
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-300 mb-2">Site Description</label>
                    <textarea rows="3"
                              class="w-full px-4 py-3 bg-slate-800/50 border border-slate-600 rounded-lg text-white focus:border-primary focus:ring-1 focus:ring-primary outline-none transition-colors resize-none">{{ $data['site_settings']['site_description'] }}</textarea>
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-300 mb-2">Meta Keywords</label>
                    <input type="text" value="{{ $data['site_settings']['meta_keywords'] }}"
                           placeholder="web developer, portfolio, react, laravel"
                           class="w-full px-4 py-3 bg-slate-800/50 border border-slate-600 rounded-lg text-white focus:border-primary focus:ring-1 focus:ring-primary outline-none transition-colors">
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-300 mb-2">Google Analytics Code</label>
                    <input type="text" value="{{ $data['site_settings']['analytics_code'] }}"
                           placeholder="GA-XXXXXXXXX"
                           class="w-full px-4 py-3 bg-slate-800/50 border border-slate-600 rounded-lg text-white focus:border-primary focus:ring-1 focus:ring-primary outline-none transition-colors">
                </div>

                <div class="flex items-center space-x-3">
                    <input type="checkbox" id="maintenance" {{ $data['site_settings']['maintenance_mode'] ? 'checked' : '' }}
                    class="w-4 h-4 text-primary bg-slate-800 border-slate-600 rounded focus:ring-primary">
                    <label for="maintenance" class="text-gray-300">Enable Maintenance Mode</label>
                </div>

                <div class="flex justify-end">
                    <button type="submit" class="bg-gradient-to-r from-primary to-secondary px-6 py-3 rounded-lg text-white font-semibold hover:from-secondary hover:to-primary transition-all duration-300">
                        <i class="fas fa-save mr-2"></i>
                        Update Settings
                    </button>
                </div>
            </form>
        </div>

        <!-- Security Settings -->
        <div class="glass-effect rounded-xl p-6">
            <h3 class="text-xl font-bold text-white mb-6">Security Settings</h3>

            <form class="space-y-6">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-sm font-medium text-gray-300 mb-2">Current Password</label>
                        <input type="password"
                               class="w-full px-4 py-3 bg-slate-800/50 border border-slate-600 rounded-lg text-white focus:border-primary focus:ring-1 focus:ring-primary outline-none transition-colors">
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-300 mb-2">New Password</label>
                        <input type="password"
                               class="w-full px-4 py-3 bg-slate-800/50 border border-slate-600 rounded-lg text-white focus:border-primary focus:ring-1 focus:ring-primary outline-none transition-colors">
                    </div>
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-300 mb-2">Confirm New Password</label>
                    <input type="password"
                           class="w-full px-4 py-3 bg-slate-800/50 border border-slate-600 rounded-lg text-white focus:border-primary focus:ring-1 focus:ring-primary outline-none transition-colors">
                </div>

                <div class="flex justify-end">
                    <button type="submit" class="bg-gradient-to-r from-red-500 to-red-600 px-6 py-3 rounded-lg text-white font-semibold hover:from-red-600 hover:to-red-700 transition-all duration-300">
                        <i class="fas fa-key mr-2"></i>
                        Update Password
                    </button>
                </div>
            </form>
        </div>

        <!-- Backup & Export -->
        <div class="glass-effect rounded-xl p-6">
            <h3 class="text-xl font-bold text-white mb-6">Backup & Export</h3>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="text-center p-6 bg-slate-800/30 rounded-lg">
                    <i class="fas fa-download text-4xl text-blue-400 mb-4"></i>
                    <h4 class="text-white font-semibold mb-2">Export Data</h4>
                    <p class="text-gray-400 text-sm mb-4">Download all your portfolio data</p>
                    <button class="bg-blue-500 hover:bg-blue-600 px-4 py-2 rounded-lg text-white font-medium transition-colors">
                        Export
                    </button>
                </div>

                <div class="text-center p-6 bg-slate-800/30 rounded-lg">
                    <i class="fas fa-cloud-upload-alt text-4xl text-green-400 mb-4"></i>
                    <h4 class="text-white font-semibold mb-2">Backup Data</h4>
                    <p class="text-gray-400 text-sm mb-4">Create a backup of your data</p>
                    <button class="bg-green-500 hover:bg-green-600 px-4 py-2 rounded-lg text-white font-medium transition-colors">
                        Backup
                    </button>
                </div>

                <div class="text-center p-6 bg-slate-800/30 rounded-lg">
                    <i class="fas fa-upload text-4xl text-purple-400 mb-4"></i>
                    <h4 class="text-white font-semibold mb-2">Import Data</h4>
                    <p class="text-gray-400 text-sm mb-4">Import data from backup</p>
                    <button class="bg-purple-500 hover:bg-purple-600 px-4 py-2 rounded-lg text-white font-medium transition-colors">
                        Import
                    </button>
                </div>
            </div>
        </div>
    </div>
</x-layouts::app>
