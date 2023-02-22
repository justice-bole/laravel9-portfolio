<!-- ====== Contact Section Start -->
<section id="contact" class="relative z-10 overflow-hidden bg-white py-20 lg:py-[120px] dark:bg-slate-700">
    <div class="container mx-auto">
        <div class="-mx-4 flex flex-wrap lg:justify-between">
            <div class="w-full px-4 lg:w-1/2 xl:w-6/12">
                <div class="mb-12 max-w-[570px] lg:mb-0">
                    <span class="text-primary mb-4 block text-base font-semibold dark:text-amber-500">
                        Contact Me
                    </span>
                    <h2
                        class="text-dark mb-6 text-[32px] font-bold uppercase sm:text-[40px] lg:text-[36px] xl:text-[40px] dark:text-gray-2">
                        GET IN TOUCH WITH ME
                    </h2>
                    <p class="text-body-color mb-9 text-base leading-relaxed dark:text-gray-2">
                        If you have any questions or feel my experience and skills could be of use, feel free to contact
                        me.
                    </p>
                </div>
            </div>
            <div class="w-full px-4 lg:w-1/2 xl:w-5/12">
                <div class="relative rounded-lg bg-white p-8 shadow-lg sm:p-12 dark:bg-slate-800">
                    <form action="/contact/submit" method="POST" x-data="{
                        formData: {
                            name: '',
                            email: '',
                            message: '',
                        },
                        errors: {},
                        successMessage: '',
                        submitForm(event) {
                            this.successMessage = '';
                            this.errors = {};
                            fetch(`/contact/submit`, {
                                    method: 'POST',
                                    headers: {
                                        'Content-Type': 'application/json',
                                        'X-Requested-With': 'XMLHttpRequest',
                                        'X-CSRF-TOKEN': document.querySelector(`meta[name='csrf-token']`).getAttribute('content')
                                    },
                                    body: JSON.stringify(this.formData)
                                })
                                .then(response => {
                                    if (response.status === 200) {
                                        return response.json();
                                    }
                                    throw response;
                                })
                                .then(result => {
                                    this.formData = {
                                        name: '',
                                        email: '',
                                        message: '',
                                    };
                                    this.successMessage = 'Thanks for your contact request. I will get back to you shortly.';
                                })
                                .catch(async (response) => {
                                    const res = await response.json();
                                    if (response.status === 422) {
                                        this.errors = res.errors;
                                    }
                                    console.log(res);
                                })
                        }
                    }"
                        x-on:submit.prevent="submitForm">
                        <template x-if="successMessage">
                            <div x-text="successMessage" class="py-4 px-6 bg-green-600 text-gray-100 mb-4"></div>
                        </template>
                        @csrf
                        <div class="mb-6">
                            <x-forms.input placeholder="Your Name" name="name" x-model="formData.name"
                                ::class="errors.name ? 'border-red-500 focus:border-red-500' : ''"></x-forms.input>
                            <template x-if="errors.name">
                                <div x-text="errors.name[0]" class="text-red-500"></div>
                            </template>
                        </div>
                        <div class="mb-6">
                            <x-forms.input type="email" placeholder="Your Email" name="email"
                                x-model="formData.email" ::class="errors.email ? 'border-red-500 focus:border-red-500' : ''"></x-forms.input>
                            <template x-if="errors.email">
                                <div x-text="errors.email[0]" class="text-red-500"></div>
                            </template>
                        </div>
                        <div class="mb-6">
                            <x-forms.textarea placeholder="Your Message" name="message" rows="6"
                                x-model="formData.message" ::class="errors.message ? 'border-red-500 focus:border-red-500' : ''"></x-forms.textarea>
                            <template x-if="errors.message">
                                <div x-text="errors.message[0]" class="text-red-500"></div>
                            </template>
                        </div>
                        <div>
                            <x-button class="w-full">
                                Send Message
                            </x-button>
                        </div>
                    </form>

                    <div>
                        <span class="absolute -top-10 -right-9 z-[-1]">
                            <svg width="100" height="100" viewBox="0 0 100 100" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M0 100C0 44.7715 0 0 0 0C55.2285 0 100 44.7715 100 100C100 100 100 100 0 100Z"
                                    fill="#3056D3" />
                            </svg>
                        </span>
                        <x-contact-dots-top></x-contact-dots-top>
                        <x-contact-dots-bottom></x-contact-dots-bottom>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
