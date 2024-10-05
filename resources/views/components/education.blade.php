<div class="container px-5 my-5">
    <div class="row gx-5 justify-content-center">
        <div class="col-lg-11 col-xl-9 col-xxl-8">
            <section>
                <h2 class="text-secondary fw-bolder mb-4">Education</h2>
                <!-- Education Card 1-->

                    <div id="education-list">

                    </div>
            </section>
        </div>
    </div>
</div>
<script>
    getEducation();
    async function getEducation(){
        let url='/educationalData';
        try{
            document.getElementById('loading-div').classList.remove('d-none');
            document.getElementById('content-div').classList.add('d-none');
            const result=await axios.get(url);
            document.getElementById('loading-div').classList.add('d-none');
            document.getElementById('content-div').classList.remove('d-none');

            result.data.forEach((item)=>{
                document.getElementById("education-list").innerHTML+=`
                      <div class="card shadow rounded-4 border-0 mb-5">
                        <div class="card-body p-5">
                            <div class="row align-items-center">
                                <div class="col col-lg-4 text-center text-lg-start mb-4">
                                    <div class="bg-light rounded-4 p-4">
                                        <div class="text-primary fw-bolder mb-2">${item['duration']}</div>
                                        <div class="small text-dark fw-bolder">${item['institutionName']}</div>
                                        <div class="small text-muted ">${item['field']}</div>
                                    </div>
                                </div>
                                <div class="col-lg-8">
                                    <p>${item['details']}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                `
            })
        }catch (error){
            alert(error)
        }
    }
</script>
