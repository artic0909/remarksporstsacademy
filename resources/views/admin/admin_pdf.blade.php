<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link rel="stylesheet" href="{{ asset('css/pdf.css') }}" />

    <title>RSPL Addmission Form</title>

   
</head>

<body>
    <section class="pdf_main">
        <div
            class="pdf_inner">
            <div class="pdf_top">
                <div
                    class="pdf_top_inner">
                    <div class="logo_part">
                        <img src="{{ url('images/logo.png') }}" alt="logo" class="logooo">
                        <p>REMARK SPORTS ACADEMY</p>
                    </div>
                    <div class="logo_side_part">
                        <img src="{{ asset('storage/' . $student->st_img) }}" alt="img">
                    </div>
                </div>

                <div
                    class="reg_title" style="display: flex; justify-content: center; margin-top: -4rem;">
                    <h5 style="
                background: #1e9cce;
                color: white;
                text-align: center;
                max-width: fit-content;
                padding-left: 50px;
                padding-right: 50px;
                padding-top: 5px;
                padding-bottom: 5px;
                font-weight: 700;
              ">
                        REGISTRATION FORM
                    </h5>
                </div>
            </div>









            <div class="mid_main">
                <div class="mid_inner">
                    <div class="datee">
                        <p>Date of Admission : {{$student->created_at}}</p>

                        <p>
                            I/We hereby apply for the
                            <strong>Cricket <i class="fa-regular fa-square-full"></i></strong>
                            /
                            <strong>Foot Ball <i class="fa-regular fa-square-full"></i></strong>
                            / ................................... Coaching program at .........................................................................................................................................................................
                        </p>
                    </div>
                </div>
            </div>















            <div class="table_first_main">
                <div class="table_first_inner">
                    <!-- heading start -->
                    <div
                        class="back_personal">
                        <p>
                            PERSONAL DETAILS
                        </p>
                    </div>
                    <!-- heading end -->



                    <!-- content start -->
                    <div
                        class="back_personal1">
                        <div>
                            Name of the Student
                        </div>

                        <div>
                            :
                        </div>

                        <div>
                            {{$student->name}}
                        </div>
                    </div>

                    <div
                        class="back_personal1">
                        <div>
                            Gender
                        </div>

                        <div>
                            :
                        </div>

                        <div>
                            {{$student->gender}}
                        </div>
                    </div>

                    <div
                        class="back_personal1">
                        <div>
                            Date of Birth
                        </div>

                        <div>
                            :
                        </div>

                        <div>
                            {{$student->dob}}
                        </div>
                    </div>

                    <div
                        class="back_personal1">
                        <div>
                            father's Name
                        </div>

                        <div>
                            :
                        </div>

                        <div>
                            {{$student->f_name}}
                        </div>
                    </div>

                    <div
                        class="back_personal1">
                        <div>
                            Mother's Name
                        </div>

                        <div>
                            :
                        </div>

                        <div>
                            {{$student->m_name}}
                        </div>
                    </div>

                    <div
                        class="back_personal1">
                        <div>
                            Nationality
                        </div>

                        <div>
                            :
                        </div>

                        <div>
                            {{$student->nationality}}
                        </div>
                    </div>
                    <!-- content end -->

















                    <!-- heading start -->
                    <div
                        class="back_personal1">
                        <p>
                            CONTACT DETAILS
                        </p>
                    </div>
                    <!-- heading end -->

                    <!-- content start -->
                    <div
                        class="back_personal1">
                        <div>
                            Address
                        </div>

                        <div>
                            :
                        </div>

                        <div>
                            {{$student->add}}
                        </div>
                    </div>

                    <div
                        class="back_personal1">
                        <div>
                            Pin Code
                        </div>

                        <div>
                            :
                        </div>

                        <div>
                            {{$student->pin_no}}
                        </div>
                    </div>

                    <div
                        class="back_personal1">
                        <div>
                            Telephone
                        </div>

                        <div>
                            :
                        </div>

                        <div>
                            {{$student->tele}}
                        </div>
                    </div>

                    <div
                        class="back_personal1">
                        <div>
                            Mobile Number
                        </div>

                        <div>
                            :
                        </div>

                        <div>
                            {{$student->mob}}
                        </div>
                    </div>

                    <div
                        class="back_personal1">
                        <div>
                            Email ID
                        </div>

                        <div>
                            :
                        </div>

                        <div>
                            {{$student->email}}
                        </div>
                    </div>
                    <!-- content end -->

                    <!-- heading start -->
                    <div
                        class="back_personal1">
                        <p>
                            PHYSICAL DESCRIPTION
                        </p>
                    </div>
                    <!-- heading end -->

                    <!-- content start -->
                    <div
                        class="back_personal1">
                        <div>
                            Height
                        </div>

                        <div>
                            :
                        </div>

                        <div>
                            {{$student->height}} FT.
                        </div>
                    </div>

                    <div
                        class="back_personal1">
                        <div>
                            Weight
                        </div>

                        <div>
                            :
                        </div>

                        <div>
                            {{$student->weight}} KG.
                        </div>
                    </div>

                    <div
                        class="back_personal1">
                        <div>
                            Any Medical History
                        </div>

                        <div>
                            :
                        </div>

                        <div>
                            {{$student->medical_history}}
                        </div>
                    </div>

                    <div
                        class="back_personal1">
                        <div>
                            Any Health Problem
                        </div>

                        <div>
                            :
                        </div>

                        <div>
                            {{$student->health_problemms}}
                        </div>
                    </div>
                    <!-- content end -->

                    <!-- heading start -->
                    <div
                        class="back_personal1">
                        <p>
                            REQUIRE DOCUMENTS
                        </p>
                    </div>
                    <!-- heading end -->

                    <!-- CONTENT START -->
                    <div class="r_documents_main" style="border-left: 1px solid black; border-right: 1px solid black; border-bottom: 1px solid black; width: 100%;">
                        <div
                            class="r_documents_inner" style="display: grid; padding: 3px;">
                            <span>( 1 ) Birth Certificate Photocopy.
                                <i class="fa-regular fa-square-check"></i></span>
                            <span>( 2 ) Medical Fit Cerificate(MBBS Doctor).
                                <i class="fa-regular fa-square-check"></i></span>
                            <span>( 3 ) One Coloured Stamp Size Photograph.
                                <i class="fa-regular fa-square-check"></i></span>
                            <span>( 4 ) Admission Fees
                                <i class="fa-solid fa-indian-rupee-sign"></i><strong>1,500 (Including T-shirt).
                                    <i class="fa-regular fa-square"></i></strong></span>
                        </div>
                    </div>
                    <!-- CONTENT END -->

                    <!-- disclaimer start -->
                    <div class="disclaimer">
                        <p>
                            I/We hereby apply to enroll our ward in the above mentioned
                            sporting program. I/We hereby conform that the information
                            provided above are the and to best of our knowledge. I/We have
                            read and understood the rules and regulations of the Remark
                            Sports Academy and hereby declare to abide by the same.
                        </p>
                    </div>
                    <!-- disclaimer end -->






                    <!-- signature start -->
                    <div class="signature_main">
                        <div class="signature_inner">
                            <div class="signature_left">
                                <div class="f_signature">

                                </div>
                                <p>Father's Signature</p>
                            </div>



                            <div class="signature_left">
                                <div class="f_signature">

                                </div>
                                <p>Mother's Signature</p>
                            </div>



                        </div>
                    </div>
                    <!-- signature end -->






                    <!-- footer address start -->
                    <div class="footer_add">
                        <div class="footer_add_inner" style="font-size: 13px; font-weight: 500;">
                            Reg. Add. : Remark Sports Pvt. Ltd., Ranihati, Jonagar, Panchla, Howrah - 711302
                        </div>
                    </div>
                    <!-- footer address end -->



                </div>
            </div>
        </div>
    </section>

    <button id="printButton" onclick="printOnlyMain()">Print Now</button>






    <script>
        function printOnlyMain() {
            // Hide the print button
            const printButton = document.getElementById('printButton');
            printButton.style.display = 'none';

            // Print only the pdf_main content
            const pdfContent = document.querySelector('.pdf_main');
            pdfContent.style.display = 'block';  // Ensure it's visible
            
            // Trigger the print dialog
            window.print();

            // Optionally, restore the button visibility after printing
            setTimeout(() => {
                printButton.style.display = 'block';
            }, 1000); // Wait for a moment to ensure printing starts before restoring
        }
    </script>
</body>

</html>