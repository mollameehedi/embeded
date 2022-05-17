@extends('layouts.frontend_app')
@section('frontent_content')
        <section id="privacy_poslicy_banner">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h2>Web Site Terms and Conditions of Use</h2>
                    </div>
                </div>
            </div>
        </section>
        <section id="privacy_main_contnent"> 
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="content">
                            <ul>
                                <li>Posted January 1, 2021 </li>
                            </ul>
                            <h3>Last updated January 01, 2021</h3>
                            <div class="all_content">
                                <h3>1. Terms</h3>
                                        <p>By accessing this web site, you are agreeing to be bound by these web site Terms and Conditions of Use, all applicable laws and regulations, and agree that you are responsible for compliance with any applicable local laws. If you do not agree with any of these terms, you are prohibited from using or accessing this site. The materials contained in this web site are protected by applicable copyright and trade mark law.</p> 
                            </div>
                            <div class="all_content_2">
                                <h3>2. Use License</h3>
                                    <ul>
                                        <li>
                                            Permission is granted to temporarily download one copy of the materials (information or software) on Company's web site for personal, non-commercial transitory viewing only. This is the grant of a license, not a transfer of title, and under this license you may not:
                                            <div class="inner_ul">
                                                <ul>
                                                    <li>
                                                        modify or copy the materials;
                                                    </li>
                                                    <br>
                                                    <li>
                                                        use the materials for any commercial purpose, or for any public display (commercial or non-commercial);
                                                    </li>
                                                    <br>
                                                    <li>
                                                        attempt to decompile or reverse engineer any software contained on Company's web site;
                                                    </li>
                                                    <br>
                                                    <li>
                                                        remove any copyright or other proprietary notations from the materials; or
                                                    </li>
                                                    <br>
                                                    <li>
                                                        transfer the materials to another person or 'mirror' the materials on any other server.
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <br>
                                        <li>
                                            This license shall automatically terminate if you violate any of these restrictions and may be terminated by Company at any time. Upon terminating your viewing of these materials or upon the termination of this license, you must destroy any downloaded materials in your possession whether in electronic or printed format.
                                        </li>
                                    </ul>
                            </div>
                            <div class="all_content">
                                <h3>3. Disclaimer</h3>
                                        <p>a. The materials on Company's web site are provided 'as is'. Company makes no warranties, expressed or implied, and hereby disclaims and negates all other warranties, including without limitation, implied warranties or conditions of merchantability, fitness for a particular purpose, or non-infringement of intellectual property or other violation of rights. Further, Company does not warrant or make any representations concerning the accuracy, likely results, or reliability of the use of the materials on its Internet web site or otherwise relating to such materials or on any sites linked to this site.</p> 
                            </div>
                            <div class="all_content">
                                <h3>4. Limitations</h3>
                                        <p>In no event shall Company or its suppliers be liable for any damages (including, without limitation, damages for loss of data or profit, or due to business interruption,) arising out of the use or inability to use the materials on Company's Internet site, even if Company or a Company authorized representative has been notified orally or in writing of the possibility of such damage. Because some jurisdictions do not allow limitations on implied warranties, or limitations of liability for consequential or incidental damages, these limitations may not apply to you.</p> 
                            </div>
                            <div class="all_content">
                                <h3>5. Revisions and Errata</h3>
                                        <p>The materials appearing on Company's web site could include technical, typographical, or photographic errors. Company does not warrant that any of the materials on its web site are accurate, complete, or current. Company may make changes to the materials contained on its web site at any time without notice. Company does not, however, make any commitment to update the materials.</p> 
                            </div>
                            <div class="all_content">
                                <h3>6. Links</h3>
                                        <p>Company has not reviewed all of the sites linked to its Internet web site and is not responsible for the contents of any such linked site. The inclusion of any link does not imply endorsement by Company of the site. Use of any such linked web site is at the user's own risk.</p> 
                            </div>
                            <div class="all_content">
                                <h3>7. Site Terms of Use Modifications</h3>
                                        <p>Company may revise these terms of use for its web site at any time without notice. By using this web site you are agreeing to be bound by the then current version of these Terms and Conditions of Use.</p> 
                            </div>
                            <div class="all_content">
                                <h3>8. Governing Law</h3>
                                        <p>Any claim relating to Company's web site shall be governed by the laws of the State of England without regard to its conflict of law provisions.</p> 
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="categories">
                            <h3>Categories</h3>
                            <ul>
                                @foreach ($categories as $category)
                                <li><a href="{{ route('index') }}#category_{{ $category->id }}">{{ $category->name }}</a></li>
                                @endforeach
                                
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
@endsection