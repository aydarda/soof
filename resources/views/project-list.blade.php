@extends('layouts.app')

@section('title', 'Project List – SOOF')

@section('content')

    <!-- Hero / Header Section -->
    <section class="relative bg-[#020d2d] py-32 lg:py-40 bg-cover bg-center" style="background-image: linear-gradient(rgba(2, 13, 45, 0.75), rgba(2, 13, 45, 0.75)), url('{{ asset('images/projects-bg.jpg') }}');">
        <div class="max-w-4xl mx-auto px-4 text-center text-white relative z-10 space-y-6">
            <h1 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold tracking-tight">PROJECT LIST</h1>
            <div class="w-24 h-1 bg-[#2563eb] mx-auto"></div>
            <p class="text-base sm:text-lg text-slate-200 font-semibold leading-relaxed max-w-2xl mx-auto">
                To Support individuals to reach their full potential
            </p>
        </div>
    </section>

    <!-- Projects Table Section -->
    <section class="py-16 lg:py-24 bg-slate-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-10">
            
            <div class="text-center space-y-4 max-w-3xl mx-auto">
                <h2 class="text-2xl sm:text-3xl font-extrabold text-slate-900 tracking-tight">
                    Projects Executed by Sergius Oseasochie Ogun Foundation (SOOF)
                </h2>
                <div class="w-16 h-1 bg-[#2563eb] mx-auto"></div>
            </div>

            <!-- Responsive Table -->
            <div class="bg-white rounded-2xl border border-slate-200 shadow-sm overflow-hidden">
                <div class="overflow-x-auto">
                    <table class="min-w-full divide-y divide-slate-200 text-sm">
                        <thead class="bg-[#020d2d] text-white">
                            <tr>
                                <th scope="col" class="px-4 py-4 text-left font-semibold tracking-wider uppercase text-xs w-12">S/N</th>
                                <th scope="col" class="px-4 py-4 text-left font-semibold tracking-wider uppercase text-xs min-w-[220px]">Project</th>
                                <th scope="col" class="px-4 py-4 text-left font-semibold tracking-wider uppercase text-xs min-w-[160px]">Location</th>
                                <th scope="col" class="px-4 py-4 text-left font-semibold tracking-wider uppercase text-xs whitespace-nowrap">Year</th>
                                <th scope="col" class="px-4 py-4 text-left font-semibold tracking-wider uppercase text-xs min-w-[220px]">Outcome</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-slate-100 bg-white">
                            <tr class="hover:bg-slate-50 transition-colors">
                                <td class="px-4 py-4 text-slate-500 font-medium">1</td>
                                <td class="px-4 py-4 text-slate-800 font-medium">Training of Youths on the use of Root Crops on Confectionary</td>
                                <td class="px-4 py-4 text-slate-600">Uromi, Edo State, Nigeria</td>
                                <td class="px-4 py-4 text-slate-600 whitespace-nowrap">2015</td>
                                <td class="px-4 py-4 text-slate-600">Empowered participants with skills required to start-up confectionary business</td>
                            </tr>
                            <tr class="hover:bg-slate-50 transition-colors">
                                <td class="px-4 py-4 text-slate-500 font-medium">2</td>
                                <td class="px-4 py-4 text-slate-800 font-medium">Musical Talent Hunt for Youths in the Constituency</td>
                                <td class="px-4 py-4 text-slate-600">Uromi, Edo State, Nigeria</td>
                                <td class="px-4 py-4 text-slate-600 whitespace-nowrap">2015</td>
                                <td class="px-4 py-4 text-slate-600">Created a learning experience and platform for youths to display and enhance their creative talents</td>
                            </tr>
                            <tr class="hover:bg-slate-50 transition-colors">
                                <td class="px-4 py-4 text-slate-500 font-medium">3</td>
                                <td class="px-4 py-4 text-slate-800 font-medium">Construction of water borehole at Eko-Igene-Uzea</td>
                                <td class="px-4 py-4 text-slate-600">Uzea, Esan North East LGA, Edo State</td>
                                <td class="px-4 py-4 text-slate-600 whitespace-nowrap">2015</td>
                                <td class="px-4 py-4 text-slate-600">Provided water for the community</td>
                            </tr>
                            <tr class="hover:bg-slate-50 transition-colors">
                                <td class="px-4 py-4 text-slate-500 font-medium">4</td>
                                <td class="px-4 py-4 text-slate-800 font-medium">Construction of a water borehole at Federal Correctional Centre, Ubiaja</td>
                                <td class="px-4 py-4 text-slate-600">Ubiaja, Edo State, Nigeria</td>
                                <td class="px-4 py-4 text-slate-600 whitespace-nowrap">2016</td>
                                <td class="px-4 py-4 text-slate-600">Provided water for the facility</td>
                            </tr>
                            <tr class="hover:bg-slate-50 transition-colors">
                                <td class="px-4 py-4 text-slate-500 font-medium">5</td>
                                <td class="px-4 py-4 text-slate-800 font-medium">Equipped Uzogbon Primary Health Care Centre Ugboha with medical equipment</td>
                                <td class="px-4 py-4 text-slate-600">Ugboha, Edo State, Nigeria</td>
                                <td class="px-4 py-4 text-slate-600 whitespace-nowrap">2016</td>
                                <td class="px-4 py-4 text-slate-600">Contributed to the provision of essential medical supplies needed for effective treatment of illnesses and diseases</td>
                            </tr>
                            <tr class="hover:bg-slate-50 transition-colors">
                                <td class="px-4 py-4 text-slate-500 font-medium">6</td>
                                <td class="px-4 py-4 text-slate-800 font-medium">Cosmetology Training for young women in Esan North East/Esan South East Federal Constituency</td>
                                <td class="px-4 py-4 text-slate-600">Uromi and Ubiaja Communities, Edo State</td>
                                <td class="px-4 py-4 text-slate-600 whitespace-nowrap">2016</td>
                                <td class="px-4 py-4 text-slate-600">Empowered participants with skills to become professional Cosmetologists, contributing to reducing unemployment in rural communities</td>
                            </tr>
                            <tr class="hover:bg-slate-50 transition-colors">
                                <td class="px-4 py-4 text-slate-500 font-medium">7</td>
                                <td class="px-4 py-4 text-slate-800 font-medium">Equipped Olinlin Primary Health Centre Uzea with requisite Medical equipment/accessories</td>
                                <td class="px-4 py-4 text-slate-600">Uzea-Uromi, Edo State, Nigeria</td>
                                <td class="px-4 py-4 text-slate-600 whitespace-nowrap">2016</td>
                                <td class="px-4 py-4 text-slate-600">Contributed to the provision of essential medical supplies needed for effective treatment of illnesses and diseases</td>
                            </tr>
                            <tr class="hover:bg-slate-50 transition-colors">
                                <td class="px-4 py-4 text-slate-500 font-medium">8</td>
                                <td class="px-4 py-4 text-slate-800 font-medium">Supported the old boys association of Ewatto Secondary School to renovate a block of six classrooms with ₦1,000,000</td>
                                <td class="px-4 py-4 text-slate-600">Ewatto, Edo State, Nigeria</td>
                                <td class="px-4 py-4 text-slate-600 whitespace-nowrap">2018</td>
                                <td class="px-4 py-4 text-slate-600">Development of educational infrastructure</td>
                            </tr>
                            <tr class="hover:bg-slate-50 transition-colors">
                                <td class="px-4 py-4 text-slate-500 font-medium">9</td>
                                <td class="px-4 py-4 text-slate-800 font-medium">Annual Registration of 600 students for NECO examination</td>
                                <td class="px-4 py-4 text-slate-600">Esan North East LGA & Esan South East LGA, Edo State</td>
                                <td class="px-4 py-4 text-slate-600 whitespace-nowrap">2012–2021</td>
                                <td class="px-4 py-4 text-slate-600">Increased number of students enrolling for the NECO examination and eased the financial burden on less privileged parents</td>
                            </tr>
                            <tr class="hover:bg-slate-50 transition-colors">
                                <td class="px-4 py-4 text-slate-500 font-medium">10</td>
                                <td class="px-4 py-4 text-slate-800 font-medium">Annual scholarship grants to beneficiaries of the SOOF Undergraduates Scholarship Scheme (₦100,000 yearly per beneficiary)</td>
                                <td class="px-4 py-4 text-slate-600">Esan North East LGA & Esan South East LGA, Edo State</td>
                                <td class="px-4 py-4 text-slate-600 whitespace-nowrap">2012–2021</td>
                                <td class="px-4 py-4 text-slate-600">Reduces the financial burden on the students</td>
                            </tr>
                            <tr class="hover:bg-slate-50 transition-colors">
                                <td class="px-4 py-4 text-slate-500 font-medium">11</td>
                                <td class="px-4 py-4 text-slate-800 font-medium">Rewards the best graduating Esan National Diploma and Higher National Diploma students of Federal Polytechnic Auchi (₦50,000 & ₦100,000 respectively)</td>
                                <td class="px-4 py-4 text-slate-600">Auchi, Edo State, Nigeria</td>
                                <td class="px-4 py-4 text-slate-600 whitespace-nowrap">Every academic year since 2012</td>
                                <td class="px-4 py-4 text-slate-600">Promotes academic excellence</td>
                            </tr>
                            <tr class="hover:bg-slate-50 transition-colors">
                                <td class="px-4 py-4 text-slate-500 font-medium">12</td>
                                <td class="px-4 py-4 text-slate-800 font-medium">Distribution of free notebooks to pupils/students of both private and public Primary/Secondary schools</td>
                                <td class="px-4 py-4 text-slate-600">Esan North East LGA & Esan South East LGA, Edo State</td>
                                <td class="px-4 py-4 text-slate-600 whitespace-nowrap">2011–2021</td>
                                <td class="px-4 py-4 text-slate-600">Provided instructional materials to over one hundred thousand pupils</td>
                            </tr>
                            <tr class="hover:bg-slate-50 transition-colors">
                                <td class="px-4 py-4 text-slate-500 font-medium">13</td>
                                <td class="px-4 py-4 text-slate-800 font-medium">Free medical Outreach programmes in rural communities (Cataract treatment/free eye glasses, Malaria/Typhoid, Ulcer, Diabetes, High Blood Pressure & UTI)</td>
                                <td class="px-4 py-4 text-slate-600">Multiple communities across Esan North East & Esan South East LGAs</td>
                                <td class="px-4 py-4 text-slate-600 whitespace-nowrap">2012–2021</td>
                                <td class="px-4 py-4 text-slate-600">Increased access & quality of health care resulting in positive health outputs</td>
                            </tr>
                            <tr class="hover:bg-slate-50 transition-colors">
                                <td class="px-4 py-4 text-slate-500 font-medium">14</td>
                                <td class="px-4 py-4 text-slate-800 font-medium">Rebuilt and furnished a block of 6 classrooms at Ugboha Secondary Commercial School</td>
                                <td class="px-4 py-4 text-slate-600">Ugboha, Edo State, Nigeria</td>
                                <td class="px-4 py-4 text-slate-600 whitespace-nowrap">2018</td>
                                <td class="px-4 py-4 text-slate-600">Development of educational infrastructure</td>
                            </tr>
                            <tr class="hover:bg-slate-50 transition-colors">
                                <td class="px-4 py-4 text-slate-500 font-medium">15</td>
                                <td class="px-4 py-4 text-slate-800 font-medium">Constructed motorized borehole at Ewatto</td>
                                <td class="px-4 py-4 text-slate-600">Ewatto, Edo State, Nigeria</td>
                                <td class="px-4 py-4 text-slate-600 whitespace-nowrap">2018</td>
                                <td class="px-4 py-4 text-slate-600">Provision of water for the community</td>
                            </tr>
                            <tr class="hover:bg-slate-50 transition-colors">
                                <td class="px-4 py-4 text-slate-500 font-medium">16</td>
                                <td class="px-4 py-4 text-slate-800 font-medium">Constructed boreholes in several communities</td>
                                <td class="px-4 py-4 text-slate-600">Emu, Ohordua, Illushi (3), Iyenlen, Ohuesan & Ifeku Island</td>
                                <td class="px-4 py-4 text-slate-600 whitespace-nowrap">2019</td>
                                <td class="px-4 py-4 text-slate-600">Provision of water for the communities</td>
                            </tr>
                            <tr class="hover:bg-slate-50 transition-colors">
                                <td class="px-4 py-4 text-slate-500 font-medium">17</td>
                                <td class="px-4 py-4 text-slate-800 font-medium">Constructed Borehole at Sacred Heart Girls Model Secondary School, Ubiaja</td>
                                <td class="px-4 py-4 text-slate-600">Ubiaja, Edo State, Nigeria</td>
                                <td class="px-4 py-4 text-slate-600 whitespace-nowrap">2019</td>
                                <td class="px-4 py-4 text-slate-600">Provided water for the students and improved living conditions within the school community</td>
                            </tr>
                            <tr class="hover:bg-slate-50 transition-colors">
                                <td class="px-4 py-4 text-slate-500 font-medium">18</td>
                                <td class="px-4 py-4 text-slate-800 font-medium">Constructed water point at Ewatto Water project</td>
                                <td class="px-4 py-4 text-slate-600">Ewatto, Edo State, Nigeria</td>
                                <td class="px-4 py-4 text-slate-600 whitespace-nowrap">2019</td>
                                <td class="px-4 py-4 text-slate-600">Improved infrastructure in the community</td>
                            </tr>
                            <tr class="hover:bg-slate-50 transition-colors">
                                <td class="px-4 py-4 text-slate-500 font-medium">19</td>
                                <td class="px-4 py-4 text-slate-800 font-medium">Christmas visitation to orphanages and the Correctional facility in Ubiaja</td>
                                <td class="px-4 py-4 text-slate-600">Ubiaja, Edo State, Nigeria</td>
                                <td class="px-4 py-4 text-slate-600 whitespace-nowrap">2015–2019</td>
                                <td class="px-4 py-4 text-slate-600">Extending care and support to the needy</td>
                            </tr>
                            <tr class="hover:bg-slate-50 transition-colors">
                                <td class="px-4 py-4 text-slate-500 font-medium">20</td>
                                <td class="px-4 py-4 text-slate-800 font-medium">Widows Support Program</td>
                                <td class="px-4 py-4 text-slate-600">Ugboha, Esan South East LGA, Edo State</td>
                                <td class="px-4 py-4 text-slate-600 whitespace-nowrap">2015–2019</td>
                                <td class="px-4 py-4 text-slate-600">Empowerment of Widows</td>
                            </tr>
                            <tr class="hover:bg-slate-50 transition-colors">
                                <td class="px-4 py-4 text-slate-500 font-medium">21</td>
                                <td class="px-4 py-4 text-slate-800 font-medium">Provision of relief material for Illushi flood victims</td>
                                <td class="px-4 py-4 text-slate-600">Illushi, Esan South East LGA, Edo State</td>
                                <td class="px-4 py-4 text-slate-600 whitespace-nowrap">2019</td>
                                <td class="px-4 py-4 text-slate-600">Provided relief materials to victims of flood disaster</td>
                            </tr>
                            <tr class="hover:bg-slate-50 transition-colors">
                                <td class="px-4 py-4 text-slate-500 font-medium">22</td>
                                <td class="px-4 py-4 text-slate-800 font-medium">Legal aid for inmates awaiting trial</td>
                                <td class="px-4 py-4 text-slate-600">Ubiaja, Esan South East LGA, Edo State</td>
                                <td class="px-4 py-4 text-slate-600 whitespace-nowrap">2015–2019</td>
                                <td class="px-4 py-4 text-slate-600">Ensured legal services for less privileged offenders and supported rehabilitation</td>
                            </tr>
                            <tr class="hover:bg-slate-50 transition-colors">
                                <td class="px-4 py-4 text-slate-500 font-medium">23</td>
                                <td class="px-4 py-4 text-slate-800 font-medium">Provision of Rice milling machine with harvesters to Farmers</td>
                                <td class="px-4 py-4 text-slate-600">Uzea, Illushi & Onnogholo Communities</td>
                                <td class="px-4 py-4 text-slate-600 whitespace-nowrap">2019</td>
                                <td class="px-4 py-4 text-slate-600">Increased Agricultural Production</td>
                            </tr>
                            <tr class="hover:bg-slate-50 transition-colors">
                                <td class="px-4 py-4 text-slate-500 font-medium">24</td>
                                <td class="px-4 py-4 text-slate-800 font-medium">Distribution of Covid-19 supplies to schools to aid the phased resumption of academic activities</td>
                                <td class="px-4 py-4 text-slate-600">Schools in Esan North East & Esan South East LGAs</td>
                                <td class="px-4 py-4 text-slate-600 whitespace-nowrap">2020</td>
                                <td class="px-4 py-4 text-slate-600">Prevented exposure to diseases</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Optional CTA -->
            <div class="text-center pt-6">
                <a href="{{ url('/what-we-do') }}" 
                   class="inline-flex items-center px-8 py-3.5 bg-[#2563eb] hover:bg-[#1d4ed8] text-white font-bold text-xs uppercase tracking-wider rounded-full shadow-md transition-colors">
                    Back to What We Do
                </a>
            </div>
        </div>
    </section>

@endsection