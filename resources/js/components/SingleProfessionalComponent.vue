<template>
    <div class="card-container">
        <div class="border-b border-blue-400">
            <div class="card card-overlay card-border-none card-result">
                <div class="card-body">
                    <div class="row">
                        <div class="col-4 d-flex align-items-center">
                            <img
                                :src="
                                    professional.logo
                                        ? professional.logo
                                        : 'img/frame.png'
                                "
                                class="aspect-square w-[120px] h-[120px] max-w-[120px] max-h-[120px] rounded-full object-center object-contain border-2 border-blue-400"
                                :alt="professional.name"
                            />
                        </div>
                        <div class="col-8">
                            <div class="container-fluid">
                                <div class="row ps-5 ps-md-0">
                                    <div class="col-10 card-info">
                                        <h4 class="dark-text mb-4">
                                            {{ professional.name }}
                                        </h4>
                                        <p class="card-resume mb-4">
                                            {{
                                                professional.company_description
                                            }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    props: ["professional"],
};
</script>
