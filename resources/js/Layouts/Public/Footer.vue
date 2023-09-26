<script setup>
import AwsIcon    from '@/Components/Shared/AwsIcon.vue'
import GoogleIcon from '@/Components/Shared/GoogleIcon.vue'
</script>

<template>
    <footer class="flex flex-col w-full">
        <div class="flex flex-col md:flex-row w-full">
            <div class="cl-auto flex flex-col items-center md:items-start py-8 space-y-4 w-full md:w-2/3 bg-gray-500 text-gray-200">
                <div id="social">
                    <ul class="list-none flex space-x-4">
                        <li>
                            <AwsIcon 
                                title="Visitar Facebook"
                                class="circle-btn"
                                name="facebook-f"
                            />
                        </li>
                        <li>
                            <AwsIcon
                                title="Visitar Twitter"
                                class="circle-btn"
                                name="twitter"
                            />
                        </li>
                    </ul>
                </div>
                <div id="copyright" class="flex flex-col items-center md:items-start">
                    <span class="font-light">&copy; {{ new Date().getFullYear() }} Derechos Reservados.</span>
                    <span class="font-semibold">BENS Electronic, SA de CV</span>
                </div>
                <div id="links">
                    <ul class="list-none flex flex-col md:flex-row md:space-x-4">
                        <li class="text-center hover:underline">
                            Aviso legal
                        </li>
                        <li class="text-center hover:underline">
                            Política de privacidad
                        </li>
                        <li class="text-center hover:underline">
                            Fundación BENS Electronic
                        </li>
                    </ul>
                </div>
            </div>
            <div class="cr-auto py-8 md:w-1/3 bg-gray-400 text-gray-100">
                <div id="contact" class="flex flex-col md:flex-row items-center md:items-start px-4 space-x-2">
                    <div>
                        <GoogleIcon
                            class="text-2xl"
                            name="phone_in_talk"
                            outline
                        />
                    </div>
                    <div class="text-center md:text-start">
                        <h4 class="font-bold">Teléfonos</h4>
                        <ul class="w-full">
                            <li>
                                <a href="tel:5567195590" class="hover:underline">(55) 6719 5590</a>
                            </li>
                            <li>
                                <a href="tel:5567195590" class="hover:underline">(55) 6719 5591</a>
                            </li>
                            <li class="mt-4">
                                <a href="mailto:info@benselectronic.com" class="hover:underline">info@benselectronic.com</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="cx-auto flex py-2 justify-between text-sm">
            <div>
                Desarrollado por
                <a target="_blank" href="https://notsoweb.com" class="uppercase hover:font-bold hover:text-red-500">
                    {{ $page.props.copyright }}
                </a>
            </div>
            <div>V{{$page.version}}</div>
        </div>
    </footer>
</template>
