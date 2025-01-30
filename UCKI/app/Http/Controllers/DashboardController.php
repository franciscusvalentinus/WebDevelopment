<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Copyright;
use App\Models\Department;
use App\Models\Design;
use App\Models\Lecturer;
use App\Models\Patent;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $cibm = $cbmi = $cacc = $ccom = $chtb = $ccbz = $cpsy = $cimt = $cisb = $cvcd = $cina = $cfpd = $cmed = $cftp = $cmem = $cdll = 0;
        $pibm = $pbmi = $pacc = $pcom = $phtb = $pcbz = $ppsy = $pimt = $pisb = $pvcd = $pina = $pfpd = $pmed = $pftp = $pmem = $pdll = 0;
        $dibm = $dbmi = $dacc = $dcom = $dhtb = $dcbz = $dpsy = $dimt = $disb = $dvcd = $dina = $dfpd = $dmed = $dftp = $dmem = $ddll = 0;
        $bibm = $bbmi = $bacc = $bcom = $bhtb = $bcbz = $bpsy = $bimt = $bisb = $bvcd = $bina = $bfpd = $bmed = $bftp = $bmem = $bdll = 0;
        $cp = $cd = $cdepartments = $cf = $cg = [];
        $pp = $pd = $pdepartments = $pf = $pg = [];
        $dp = $dd = $ddepartments = $df = $dg = [];
        $bp = $bd = $bdepartments = $bf = $bg = [];
        $cibmyear = $cbmiyear = $caccyear = $ccomyear = $chtbyear = $ccbzyear = $cpsyyear = $cimtyear = $cisbyear = $cvcdyear = $cinayear = $cfpdyear = $cmedyear = $cftpyear = $cmemyear = $cdllyear = 0;
        $pibmyear = $pbmiyear = $paccyear = $pcomyear = $phtbyear = $pcbzyear = $ppsyyear = $pimtyear = $pisbyear = $pvcdyear = $pinayear = $pfpdyear = $pmedyear = $pftpyear = $pmemyear = $pdllyear = 0;
        $dibmyear = $dbmiyear = $daccyear = $dcomyear = $dhtbyear = $dcbzyear = $dpsyyear = $dimtyear = $disbyear = $dvcdyear = $dinayear = $dfpdyear = $dmedyear = $dftpyear = $dmemyear = $ddllyear = 0;
        $bibmyear = $bbmiyear = $baccyear = $bcomyear = $bhtbyear = $bcbzyear = $bpsyyear = $bimtyear = $bisbyear = $bvcdyear = $binayear = $bfpdyear = $bmedyear = $bftpyear = $bmemyear = $bdllyear = 0;
        $cpyear = $cdyear = $cdepartmentsyear = $cfyear = $cgyear = [];
        $ppyear = $pdyear = $pdepartmentsyear = $pfyear = $pgyear = [];
        $dpyear = $ddyear = $ddepartmentsyear = $dfyear = $dgyear = [];
        $bpyear = $bdyear = $bdepartmentsyear = $bfyear = $bgyear = [];
        $cibmnext = $cbminext = $caccnext = $ccomnext = $chtbnext = $ccbznext = $cpsynext = $cimtnext = $cisbnext = $cvcdnext = $cinanext = $cfpdnext = $cmednext = $cftpnext = $cmemnext = $cdllnext = 0;
        $pibmnext = $pbminext = $paccnext = $pcomnext = $phtbnext = $pcbznext = $ppsynext = $pimtnext = $pisbnext = $pvcdnext = $pinanext = $pfpdnext = $pmednext = $pftpnext = $pmemnext = $pdllnext = 0;
        $dibmnext = $dbminext = $daccnext = $dcomnext = $dhtbnext = $dcbznext = $dpsynext = $dimtnext = $disbnext = $dvcdnext = $dinanext = $dfpdnext = $dmednext = $dftpnext = $dmemnext = $ddllnext = 0;
        $bibmnext = $bbminext = $baccnext = $bcomnext = $bhtbnext = $bcbznext = $bpsynext = $bimtnext = $bisbnext = $bvcdnext = $binanext = $bfpdnext = $bmednext = $bftpnext = $bmemnext = $bdllnext = 0;
        $cpnext = $cdnext = $cdepartmentsnext = $cfnext = $cgnext = [];
        $ppnext = $pdnext = $pdepartmentsnext = $pfnext = $pgnext = [];
        $dpnext = $ddnext = $ddepartmentsnext = $dfnext = $dgnext = [];
        $bpnext = $bdnext = $bdepartmentsnext = $bfnext = $bgnext = [];
        $cibmprev = $cbmiprev = $caccprev = $ccomprev = $chtbprev = $ccbzprev = $cpsyprev = $cimtprev = $cisbprev = $cvcdprev = $cinaprev = $cfpdprev = $cmedprev = $cftpprev = $cmemprev = $cdllprev = 0;
        $pibmprev = $pbmiprev = $paccprev = $pcomprev = $phtbprev = $pcbzprev = $ppsyprev = $pimtprev = $pisbprev = $pvcdprev = $pinaprev = $pfpdprev = $pmedprev = $pftpprev = $pmemprev = $pdllprev = 0;
        $dibmprev = $dbmiprev = $daccprev = $dcomprev = $dhtbprev = $dcbzprev = $dpsyprev = $dimtprev = $disbprev = $dvcdprev = $dinaprev = $dfpdprev = $dmedprev = $dftpprev = $dmemprev = $ddllprev = 0;
        $bibmprev = $bbmiprev = $baccprev = $bcomprev = $bhtbprev = $bcbzprev = $bpsyprev = $bimtprev = $bisbprev = $bvcdprev = $binaprev = $bfpdprev = $bmedprev = $bftpprev = $bmemprev = $bdllprev = 0;
        $cpprev = $cdprev = $cdepartmentsprev = $cfprev = $cgprev = [];
        $ppprev = $pdprev = $pdepartmentsprev = $pfprev = $pgprev = [];
        $dpprev = $ddprev = $ddepartmentsprev = $dfprev = $dgprev = [];
        $bpprev = $bdprev = $bdepartmentsprev = $bfprev = $bgprev = [];

        $copyright = Copyright::all();
        $patent = Patent::all();
        $design = Design::all();
        $brand = Brand::all();

        $copyrights = Copyright::pluck('helper');

        foreach ($copyrights as $c) {
            $cp[] = explode(',', $c);
        }

        foreach ($cp as $c) {
            $cd[] = array_values( array_flip( array_flip($c)));
        }

        foreach ($cd as $c) {
            $cdepartments[] = Lecturer::select('department_id')->whereIn('id', $c)->get();
        }

        foreach ($cdepartments as $c) {
            foreach ($c as $d) {
                $ce[] = $d->department_id;
            }
            $cf[] = $ce;
            unset($ce);
        }

        foreach ($cf as $c) {
            $cg[] = array_values( array_flip( array_flip($c)));
        }

        foreach ($cg as $d) {
            foreach ($d as $c) {
                if ($c == 1) {
                    ++$cibm;
                }
                elseif ($c == 2) {
                    ++$cbmi;
                }
                elseif ($c == 3) {
                    ++$cacc;
                }
                elseif ($c == 4) {
                    ++$ccom;
                }
                elseif ($c == 5) {
                    ++$chtb;
                }
                elseif ($c == 6) {
                    ++$ccbz;
                }
                elseif ($c == 7) {
                    ++$cpsy;
                }
                elseif ($c == 8) {
                    ++$cimt;
                }
                elseif ($c == 9) {
                    ++$cisb;
                }
                elseif ($c == 10) {
                    ++$cvcd;
                }
                elseif ($c == 11) {
                    ++$cina;
                }
                elseif ($c == 12) {
                    ++$cfpd;
                }
                elseif ($c == 13) {
                    ++$cmed;
                }
                elseif ($c == 14) {
                    ++$cftp;
                }
                elseif ($c == 15) {
                    ++$cmem;
                }
                elseif ($c == 16) {
                    ++$cdll;
                }
            }
        }

        $patents = Patent::pluck('helper');

        foreach ($patents as $p) {
            $pp[] = explode(',', $p);
        }

        foreach ($pp as $p) {
            $pd[] = array_values( array_flip( array_flip($p)));
        }

        foreach ($pd as $p) {
            $pdepartments[] = Lecturer::select('department_id')->whereIn('id', $p)->get();
        }

        foreach ($pdepartments as $p) {
            foreach ($p as $d) {
                $pe[] = $d->department_id;
            }
            $pf[] = $pe;
            unset($pe);
        }

        foreach ($pf as $p) {
            $pg[] = array_values( array_flip( array_flip($p)));
        }

        foreach ($pg as $d) {
            foreach ($d as $p) {
                if ($p == 1) {
                    ++$pibm;
                }
                elseif ($p == 2) {
                    ++$pbmi;
                }
                elseif ($p == 3) {
                    ++$pacc;
                }
                elseif ($p == 4) {
                    ++$pcom;
                }
                elseif ($p == 5) {
                    ++$phtb;
                }
                elseif ($p == 6) {
                    ++$pcbz;
                }
                elseif ($p == 7) {
                    ++$ppsy;
                }
                elseif ($p == 8) {
                    ++$pimt;
                }
                elseif ($p == 9) {
                    ++$pisb;
                }
                elseif ($p == 10) {
                    ++$pvcd;
                }
                elseif ($p == 11) {
                    ++$pina;
                }
                elseif ($p == 12) {
                    ++$pfpd;
                }
                elseif ($p == 13) {
                    ++$pmed;
                }
                elseif ($p == 14) {
                    ++$pftp;
                }
                elseif ($p == 15) {
                    ++$pmem;
                }
                elseif ($p == 16) {
                    ++$pdll;
                }
            }
        }

        $designs = Design::pluck('helper');

        foreach ($designs as $d) {
            $dp[] = explode(',', $d);
        }

        foreach ($dp as $d) {
            $dd[] = array_values( array_flip( array_flip($d)));
        }

        foreach ($dd as $d) {
            $ddepartments[] = Lecturer::select('department_id')->whereIn('id', $d)->get();
        }

        foreach ($ddepartments as $c) {
            foreach ($c as $d) {
                $de[] = $d->department_id;
            }
            $df[] = $de;
            unset($de);
        }

        foreach ($df as $d) {
            $dg[] = array_values( array_flip( array_flip($d)));
        }

        foreach ($dg as $d) {
            foreach ($d as $c) {
                if ($c == 1) {
                    ++$dibm;
                }
                elseif ($c == 2) {
                    ++$dbmi;
                }
                elseif ($c == 3) {
                    ++$dacc;
                }
                elseif ($c == 4) {
                    ++$dcom;
                }
                elseif ($c == 5) {
                    ++$dhtb;
                }
                elseif ($c == 6) {
                    ++$dcbz;
                }
                elseif ($c == 7) {
                    ++$dpsy;
                }
                elseif ($c == 8) {
                    ++$dimt;
                }
                elseif ($c == 9) {
                    ++$disb;
                }
                elseif ($c == 10) {
                    ++$dvcd;
                }
                elseif ($c == 11) {
                    ++$dina;
                }
                elseif ($c == 12) {
                    ++$dfpd;
                }
                elseif ($c == 13) {
                    ++$dmed;
                }
                elseif ($c == 14) {
                    ++$dftp;
                }
                elseif ($c == 15) {
                    ++$dmem;
                }
                elseif ($c == 16) {
                    ++$ddll;
                }
            }
        }

        $brands = Brand::pluck('helper');

        foreach ($brands as $b) {
            $bp[] = explode(',', $b);
        }

        foreach ($bp as $b) {
            $bd[] = array_values( array_flip( array_flip($b)));
        }

        foreach ($bd as $b) {
            $bdepartments[] = Lecturer::select('department_id')->whereIn('id', $b)->get();
        }

        foreach ($bdepartments as $b) {
            foreach ($b as $d) {
                $be[] = $d->department_id;
            }
            $bf[] = $be;
            unset($be);
        }

        foreach ($bf as $b) {
            $bg[] = array_values( array_flip( array_flip($b)));
        }

        foreach ($bg as $d) {
            foreach ($d as $b) {
                if ($b == 1) {
                    ++$bibm;
                }
                elseif ($b == 2) {
                    ++$bbmi;
                }
                elseif ($b == 3) {
                    ++$bacc;
                }
                elseif ($b == 4) {
                    ++$bcom;
                }
                elseif ($b == 5) {
                    ++$bhtb;
                }
                elseif ($b == 6) {
                    ++$bcbz;
                }
                elseif ($b == 7) {
                    ++$bpsy;
                }
                elseif ($b == 8) {
                    ++$bimt;
                }
                elseif ($b == 9) {
                    ++$bisb;
                }
                elseif ($b == 10) {
                    ++$bvcd;
                }
                elseif ($b == 11) {
                    ++$bina;
                }
                elseif ($b == 12) {
                    ++$bfpd;
                }
                elseif ($b == 13) {
                    ++$bmed;
                }
                elseif ($b == 14) {
                    ++$bftp;
                }
                elseif ($b == 15) {
                    ++$bmem;
                }
                elseif ($b == 16) {
                    ++$bdll;
                }
            }
        }

        $year = $request->keyword;
        $yearnext = $year + 1;
        $yearprev = $year - 1;
        $copyrightyear = Copyright::whereYear('tanggal_permohonan', $request->keyword)->get();
        $patentyear = Patent::whereYear('tanggal_permohonan', $request->keyword)->get();
        $designyear = Design::whereYear('tanggal_permohonan', $request->keyword)->get();
        $brandyear = Brand::whereYear('tanggal_permohonan', $request->keyword)->get();

        $datenow1 = new \DateTime();
        $datenow1->setDate($year, 8, 1);
        $finalnow1 = $datenow1->format('Y-m-d');

        $datenow2 = new \DateTime();
        $datenow2->setDate($yearprev, 8, 1);
        $finalnow2 = $datenow2->format('Y-m-d');

        $datenext = new \DateTime();
        $datenext->setDate($yearnext, 7, 31);
        $finalnext = $datenext->format('Y-m-d');

        $dateprev = new \DateTime();
        $dateprev->setDate($year, 7, 31);
        $finalprev = $dateprev->format('Y-m-d');

        $copyrightnext = Copyright::whereBetween('tanggal_permohonan', [$finalnow1, $finalnext])->get();
        $copyrightprev = Copyright::whereBetween('tanggal_permohonan', [$finalnow2, $finalprev])->get();
        $patentnext = Patent::whereBetween('tanggal_permohonan', [$finalnow1, $finalnext])->get();
        $patentprev = Patent::whereBetween('tanggal_permohonan', [$finalnow2, $finalprev])->get();
        $designnext = Design::whereBetween('tanggal_permohonan', [$finalnow1, $finalnext])->get();
        $designprev = Design::whereBetween('tanggal_permohonan', [$finalnow2, $finalprev])->get();
        $brandnext = Brand::whereBetween('tanggal_permohonan', [$finalnow1, $finalnext])->get();
        $brandprev = Brand::whereBetween('tanggal_permohonan', [$finalnow2, $finalprev])->get();

        $copyrightsyear = Copyright::whereYear('tanggal_permohonan', $request->keyword)->pluck('helper');

        foreach ($copyrightsyear as $c) {
            $cpyear[] = explode(',', $c);
        }

        foreach ($cpyear as $c) {
            $cdyear[] = array_values( array_flip( array_flip($c)));
        }

        foreach ($cdyear as $c) {
            $cdepartmentsyear[] = Lecturer::select('department_id')->whereIn('id', $c)->get();
        }

        foreach ($cdepartmentsyear as $c) {
            foreach ($c as $d) {
                $ceyear[] = $d->department_id;
            }
            $cfyear[] = $ceyear;
            unset($ceyear);
        }

        foreach ($cfyear as $c) {
            $cgyear[] = array_values( array_flip( array_flip($c)));
        }

        foreach ($cgyear as $d) {
            foreach ($d as $c) {
                if ($c == 1) {
                    ++$cibmyear;
                }
                elseif ($c == 2) {
                    ++$cbmiyear;
                }
                elseif ($c == 3) {
                    ++$caccyear;
                }
                elseif ($c == 4) {
                    ++$ccomyear;
                }
                elseif ($c == 5) {
                    ++$chtbyear;
                }
                elseif ($c == 6) {
                    ++$ccbzyear;
                }
                elseif ($c == 7) {
                    ++$cpsyyear;
                }
                elseif ($c == 8) {
                    ++$cimtyear;
                }
                elseif ($c == 9) {
                    ++$cisbyear;
                }
                elseif ($c == 10) {
                    ++$cvcdyear;
                }
                elseif ($c == 11) {
                    ++$cinayear;
                }
                elseif ($c == 12) {
                    ++$cfpdyear;
                }
                elseif ($c == 13) {
                    ++$cmedyear;
                }
                elseif ($c == 14) {
                    ++$cftpyear;
                }
                elseif ($c == 15) {
                    ++$cmemyear;
                }
                elseif ($c == 16) {
                    ++$cdllyear;
                }
            }
        }

        $patentsyear = Patent::whereYear('tanggal_permohonan', $request->keyword)->pluck('helper');

        foreach ($patentsyear as $p) {
            $ppyear[] = explode(',', $p);
        }

        foreach ($ppyear as $p) {
            $pdyear[] = array_values( array_flip( array_flip($p)));
        }

        foreach ($pdyear as $p) {
            $pdepartmentsyear[] = Lecturer::select('department_id')->whereIn('id', $p)->get();
        }

        foreach ($pdepartmentsyear as $p) {
            foreach ($p as $d) {
                $peyear[] = $d->department_id;
            }
            $pfyear[] = $peyear;
            unset($peyear);
        }

        foreach ($pfyear as $p) {
            $pgyear[] = array_values( array_flip( array_flip($p)));
        }

        foreach ($pgyear as $d) {
            foreach ($d as $p) {
                if ($p == 1) {
                    ++$pibmyear;
                }
                elseif ($p == 2) {
                    ++$pbmiyear;
                }
                elseif ($p == 3) {
                    ++$paccyear;
                }
                elseif ($p == 4) {
                    ++$pcomyear;
                }
                elseif ($p == 5) {
                    ++$phtbyear;
                }
                elseif ($p == 6) {
                    ++$pcbzyear;
                }
                elseif ($p == 7) {
                    ++$ppsyyear;
                }
                elseif ($p == 8) {
                    ++$pimtyear;
                }
                elseif ($p == 9) {
                    ++$pisbyear;
                }
                elseif ($p == 10) {
                    ++$pvcdyear;
                }
                elseif ($p == 11) {
                    ++$pinayear;
                }
                elseif ($p == 12) {
                    ++$pfpdyear;
                }
                elseif ($p == 13) {
                    ++$pmedyear;
                }
                elseif ($p == 14) {
                    ++$pftpyear;
                }
                elseif ($p == 15) {
                    ++$pmemyear;
                }
                elseif ($p == 16) {
                    ++$pdllyear;
                }
            }
        }

        $designsyear = Design::whereYear('tanggal_permohonan', $request->keyword)->pluck('helper');

        foreach ($designsyear as $d) {
            $dpyear[] = explode(',', $d);
        }

        foreach ($dpyear as $d) {
            $ddyear[] = array_values( array_flip( array_flip($d)));
        }

        foreach ($ddyear as $d) {
            $ddepartmentsyear[] = Lecturer::select('department_id')->whereIn('id', $d)->get();
        }

        foreach ($ddepartmentsyear as $c) {
            foreach ($c as $d) {
                $deyear[] = $d->department_id;
            }
            $dfyear[] = $deyear;
            unset($deyear);
        }

        foreach ($dfyear as $d) {
            $dgyear[] = array_values( array_flip( array_flip($d)));
        }

        foreach ($dgyear as $d) {
            foreach ($d as $c) {
                if ($c == 1) {
                    ++$dibmyear;
                }
                elseif ($c == 2) {
                    ++$dbmiyear;
                }
                elseif ($c == 3) {
                    ++$daccyear;
                }
                elseif ($c == 4) {
                    ++$dcomyear;
                }
                elseif ($c == 5) {
                    ++$dhtbyear;
                }
                elseif ($c == 6) {
                    ++$dcbzyear;
                }
                elseif ($c == 7) {
                    ++$dpsyyear;
                }
                elseif ($c == 8) {
                    ++$dimtyear;
                }
                elseif ($c == 9) {
                    ++$disbyear;
                }
                elseif ($c == 10) {
                    ++$dvcdyear;
                }
                elseif ($c == 11) {
                    ++$dinayear;
                }
                elseif ($c == 12) {
                    ++$dfpdyear;
                }
                elseif ($c == 13) {
                    ++$dmedyear;
                }
                elseif ($c == 14) {
                    ++$dftpyear;
                }
                elseif ($c == 15) {
                    ++$dmemyear;
                }
                elseif ($c == 16) {
                    ++$ddllyear;
                }
            }
        }

        $brandsyear = Brand::whereYear('tanggal_permohonan', $request->keyword)->pluck('helper');

        foreach ($brandsyear as $b) {
            $bpyear[] = explode(',', $b);
        }

        foreach ($bpyear as $b) {
            $bdyear[] = array_values( array_flip( array_flip($b)));
        }

        foreach ($bdyear as $b) {
            $bdepartmentsyear[] = Lecturer::select('department_id')->whereIn('id', $b)->get();
        }

        foreach ($bdepartmentsyear as $b) {
            foreach ($b as $d) {
                $beyear[] = $d->department_id;
            }
            $bfyear[] = $beyear;
            unset($beyear);
        }

        foreach ($bfyear as $b) {
            $bgyear[] = array_values( array_flip( array_flip($b)));
        }

        foreach ($bgyear as $d) {
            foreach ($d as $b) {
                if ($b == 1) {
                    ++$bibmyear;
                }
                elseif ($b == 2) {
                    ++$bbmiyear;
                }
                elseif ($b == 3) {
                    ++$baccyear;
                }
                elseif ($b == 4) {
                    ++$bcomyear;
                }
                elseif ($b == 5) {
                    ++$bhtbyear;
                }
                elseif ($b == 6) {
                    ++$bcbzyear;
                }
                elseif ($b == 7) {
                    ++$bpsyyear;
                }
                elseif ($b == 8) {
                    ++$bimtyear;
                }
                elseif ($b == 9) {
                    ++$bisbyear;
                }
                elseif ($b == 10) {
                    ++$bvcdyear;
                }
                elseif ($b == 11) {
                    ++$binayear;
                }
                elseif ($b == 12) {
                    ++$bfpdyear;
                }
                elseif ($b == 13) {
                    ++$bmedyear;
                }
                elseif ($b == 14) {
                    ++$bftpyear;
                }
                elseif ($b == 15) {
                    ++$bmemyear;
                }
                elseif ($b == 16) {
                    ++$bdllyear;
                }
            }
        }

        // NEXT

        $copyrightsnext = Copyright::whereBetween('tanggal_permohonan', [$finalnow1, $finalnext])->pluck('helper');

        foreach ($copyrightsnext as $c) {
            $cpnext[] = explode(',', $c);
        }

        foreach ($cpnext as $c) {
            $cdnext[] = array_values( array_flip( array_flip($c)));
        }

        foreach ($cdnext as $c) {
            $cdepartmentsnext[] = Lecturer::select('department_id')->whereIn('id', $c)->get();
        }

        foreach ($cdepartmentsnext as $c) {
            foreach ($c as $d) {
                $cenext[] = $d->department_id;
            }
            $cfnext[] = $cenext;
            unset($cenext);
        }

        foreach ($cfnext as $c) {
            $cgnext[] = array_values( array_flip( array_flip($c)));
        }

        foreach ($cgnext as $d) {
            foreach ($d as $c) {
                if ($c == 1) {
                    ++$cibmnext;
                }
                elseif ($c == 2) {
                    ++$cbminext;
                }
                elseif ($c == 3) {
                    ++$caccnext;
                }
                elseif ($c == 4) {
                    ++$ccomnext;
                }
                elseif ($c == 5) {
                    ++$chtbnext;
                }
                elseif ($c == 6) {
                    ++$ccbznext;
                }
                elseif ($c == 7) {
                    ++$cpsynext;
                }
                elseif ($c == 8) {
                    ++$cimtnext;
                }
                elseif ($c == 9) {
                    ++$cisbnext;
                }
                elseif ($c == 10) {
                    ++$cvcdnext;
                }
                elseif ($c == 11) {
                    ++$cinanext;
                }
                elseif ($c == 12) {
                    ++$cfpdnext;
                }
                elseif ($c == 13) {
                    ++$cmednext;
                }
                elseif ($c == 14) {
                    ++$cftpnext;
                }
                elseif ($c == 15) {
                    ++$cmemnext;
                }
                elseif ($c == 16) {
                    ++$cdllnext;
                }
            }
        }

        $patentsnext = Patent::whereBetween('tanggal_permohonan', [$finalnow1, $finalnext])->pluck('helper');

        foreach ($patentsnext as $p) {
            $ppnext[] = explode(',', $p);
        }

        foreach ($ppnext as $p) {
            $pdnext[] = array_values( array_flip( array_flip($p)));
        }

        foreach ($pdnext as $p) {
            $pdepartmentsnext[] = Lecturer::select('department_id')->whereIn('id', $p)->get();
        }

        foreach ($pdepartmentsnext as $p) {
            foreach ($p as $d) {
                $penext[] = $d->department_id;
            }
            $pfnext[] = $penext;
            unset($penext);
        }

        foreach ($pfnext as $p) {
            $pgnext[] = array_values( array_flip( array_flip($p)));
        }

        foreach ($pgnext as $d) {
            foreach ($d as $p) {
                if ($p == 1) {
                    ++$pibmnext;
                }
                elseif ($p == 2) {
                    ++$pbminext;
                }
                elseif ($p == 3) {
                    ++$paccnext;
                }
                elseif ($p == 4) {
                    ++$pcomnext;
                }
                elseif ($p == 5) {
                    ++$phtbnext;
                }
                elseif ($p == 6) {
                    ++$pcbznext;
                }
                elseif ($p == 7) {
                    ++$ppsynext;
                }
                elseif ($p == 8) {
                    ++$pimtnext;
                }
                elseif ($p == 9) {
                    ++$pisbnext;
                }
                elseif ($p == 10) {
                    ++$pvcdnext;
                }
                elseif ($p == 11) {
                    ++$pinanext;
                }
                elseif ($p == 12) {
                    ++$pfpdnext;
                }
                elseif ($p == 13) {
                    ++$pmednext;
                }
                elseif ($p == 14) {
                    ++$pftpnext;
                }
                elseif ($p == 15) {
                    ++$pmemnext;
                }
                elseif ($p == 16) {
                    ++$pdllnext;
                }
            }
        }

        $designsnext = Design::whereBetween('tanggal_permohonan', [$finalnow1, $finalnext])->pluck('helper');

        foreach ($designsnext as $d) {
            $dpnext[] = explode(',', $d);
        }

        foreach ($dpnext as $d) {
            $ddnext[] = array_values( array_flip( array_flip($d)));
        }

        foreach ($ddnext as $d) {
            $ddepartmentsnext[] = Lecturer::select('department_id')->whereIn('id', $d)->get();
        }

        foreach ($ddepartmentsnext as $c) {
            foreach ($c as $d) {
                $denext[] = $d->department_id;
            }
            $dfnext[] = $denext;
            unset($denext);
        }

        foreach ($dfnext as $d) {
            $dgnext[] = array_values( array_flip( array_flip($d)));
        }

        foreach ($dgnext as $d) {
            foreach ($d as $c) {
                if ($c == 1) {
                    ++$dibmnext;
                }
                elseif ($c == 2) {
                    ++$dbminext;
                }
                elseif ($c == 3) {
                    ++$daccnext;
                }
                elseif ($c == 4) {
                    ++$dcomnext;
                }
                elseif ($c == 5) {
                    ++$dhtbnext;
                }
                elseif ($c == 6) {
                    ++$dcbznext;
                }
                elseif ($c == 7) {
                    ++$dpsynext;
                }
                elseif ($c == 8) {
                    ++$dimtnext;
                }
                elseif ($c == 9) {
                    ++$disbnext;
                }
                elseif ($c == 10) {
                    ++$dvcdnext;
                }
                elseif ($c == 11) {
                    ++$dinanext;
                }
                elseif ($c == 12) {
                    ++$dfpdnext;
                }
                elseif ($c == 13) {
                    ++$dmednext;
                }
                elseif ($c == 14) {
                    ++$dftpnext;
                }
                elseif ($c == 15) {
                    ++$dmemnext;
                }
                elseif ($c == 16) {
                    ++$ddllnext;
                }
            }
        }

        $brandsnext = Brand::whereBetween('tanggal_permohonan', [$finalnow1, $finalnext])->pluck('helper');

        foreach ($brandsnext as $b) {
            $bpnext[] = explode(',', $b);
        }

        foreach ($bpnext as $b) {
            $bdnext[] = array_values( array_flip( array_flip($b)));
        }

        foreach ($bdnext as $b) {
            $bdepartmentsnext[] = Lecturer::select('department_id')->whereIn('id', $b)->get();
        }

        foreach ($bdepartmentsnext as $b) {
            foreach ($b as $d) {
                $benext[] = $d->department_id;
            }
            $bfnext[] = $benext;
            unset($benext);
        }

        foreach ($bfnext as $b) {
            $bgnext[] = array_values( array_flip( array_flip($b)));
        }

        foreach ($bgnext as $d) {
            foreach ($d as $b) {
                if ($b == 1) {
                    ++$bibmnext;
                }
                elseif ($b == 2) {
                    ++$bbminext;
                }
                elseif ($b == 3) {
                    ++$baccnext;
                }
                elseif ($b == 4) {
                    ++$bcomnext;
                }
                elseif ($b == 5) {
                    ++$bhtbnext;
                }
                elseif ($b == 6) {
                    ++$bcbznext;
                }
                elseif ($b == 7) {
                    ++$bpsynext;
                }
                elseif ($b == 8) {
                    ++$bimtnext;
                }
                elseif ($b == 9) {
                    ++$bisbnext;
                }
                elseif ($b == 10) {
                    ++$bvcdnext;
                }
                elseif ($b == 11) {
                    ++$binanext;
                }
                elseif ($b == 12) {
                    ++$bfpdnext;
                }
                elseif ($b == 13) {
                    ++$bmednext;
                }
                elseif ($b == 14) {
                    ++$bftpnext;
                }
                elseif ($b == 15) {
                    ++$bmemnext;
                }
                elseif ($b == 16) {
                    ++$bdllnext;
                }
            }
        }

        // PREV

        $copyrightsprev = Copyright::whereBetween('tanggal_permohonan', [$finalnow2, $finalprev])->pluck('helper');

        foreach ($copyrightsprev as $c) {
            $cpprev[] = explode(',', $c);
        }

        foreach ($cpprev as $c) {
            $cdprev[] = array_values( array_flip( array_flip($c)));
        }

        foreach ($cdprev as $c) {
            $cdepartmentsprev[] = Lecturer::select('department_id')->whereIn('id', $c)->get();
        }

        foreach ($cdepartmentsprev as $c) {
            foreach ($c as $d) {
                $ceprev[] = $d->department_id;
            }
            $cfprev[] = $ceprev;
            unset($ceprev);
        }

        foreach ($cfprev as $c) {
            $cgprev[] = array_values( array_flip( array_flip($c)));
        }

        foreach ($cgprev as $d) {
            foreach ($d as $c) {
                if ($c == 1) {
                    ++$cibmprev;
                }
                elseif ($c == 2) {
                    ++$cbmiprev;
                }
                elseif ($c == 3) {
                    ++$caccprev;
                }
                elseif ($c == 4) {
                    ++$ccomprev;
                }
                elseif ($c == 5) {
                    ++$chtbprev;
                }
                elseif ($c == 6) {
                    ++$ccbzprev;
                }
                elseif ($c == 7) {
                    ++$cpsyprev;
                }
                elseif ($c == 8) {
                    ++$cimtprev;
                }
                elseif ($c == 9) {
                    ++$cisbprev;
                }
                elseif ($c == 10) {
                    ++$cvcdprev;
                }
                elseif ($c == 11) {
                    ++$cinaprev;
                }
                elseif ($c == 12) {
                    ++$cfpdprev;
                }
                elseif ($c == 13) {
                    ++$cmedprev;
                }
                elseif ($c == 14) {
                    ++$cftpprev;
                }
                elseif ($c == 15) {
                    ++$cmemprev;
                }
                elseif ($c == 16) {
                    ++$cdllprev;
                }
            }
        }

        $patentsprev = Patent::whereBetween('tanggal_permohonan', [$finalnow2, $finalprev])->pluck('helper');

        foreach ($patentsprev as $p) {
            $ppprev[] = explode(',', $p);
        }

        foreach ($ppprev as $p) {
            $pdprev[] = array_values( array_flip( array_flip($p)));
        }

        foreach ($pdprev as $p) {
            $pdepartmentsprev[] = Lecturer::select('department_id')->whereIn('id', $p)->get();
        }

        foreach ($pdepartmentsprev as $p) {
            foreach ($p as $d) {
                $peprev[] = $d->department_id;
            }
            $pfprev[] = $peprev;
            unset($peprev);
        }

        foreach ($pfprev as $p) {
            $pgprev[] = array_values( array_flip( array_flip($p)));
        }

        foreach ($pgprev as $d) {
            foreach ($d as $p) {
                if ($p == 1) {
                    ++$pibmprev;
                }
                elseif ($p == 2) {
                    ++$pbmiprev;
                }
                elseif ($p == 3) {
                    ++$paccprev;
                }
                elseif ($p == 4) {
                    ++$pcomprev;
                }
                elseif ($p == 5) {
                    ++$phtbprev;
                }
                elseif ($p == 6) {
                    ++$pcbzprev;
                }
                elseif ($p == 7) {
                    ++$ppsyprev;
                }
                elseif ($p == 8) {
                    ++$pimtprev;
                }
                elseif ($p == 9) {
                    ++$pisbprev;
                }
                elseif ($p == 10) {
                    ++$pvcdprev;
                }
                elseif ($p == 11) {
                    ++$pinaprev;
                }
                elseif ($p == 12) {
                    ++$pfpdprev;
                }
                elseif ($p == 13) {
                    ++$pmedprev;
                }
                elseif ($p == 14) {
                    ++$pftpprev;
                }
                elseif ($p == 15) {
                    ++$pmemprev;
                }
                elseif ($p == 16) {
                    ++$pdllprev;
                }
            }
        }

        $designsprev = Design::whereBetween('tanggal_permohonan', [$finalnow2, $finalprev])->pluck('helper');

        foreach ($designsprev as $d) {
            $dpprev[] = explode(',', $d);
        }

        foreach ($dpprev as $d) {
            $ddprev[] = array_values( array_flip( array_flip($d)));
        }

        foreach ($ddprev as $d) {
            $ddepartmentsprev[] = Lecturer::select('department_id')->whereIn('id', $d)->get();
        }

        foreach ($ddepartmentsprev as $c) {
            foreach ($c as $d) {
                $deprev[] = $d->department_id;
            }
            $dfprev[] = $deprev;
            unset($deprev);
        }

        foreach ($dfprev as $d) {
            $dgprev[] = array_values( array_flip( array_flip($d)));
        }

        foreach ($dgprev as $d) {
            foreach ($d as $c) {
                if ($c == 1) {
                    ++$dibmprev;
                }
                elseif ($c == 2) {
                    ++$dbmiprev;
                }
                elseif ($c == 3) {
                    ++$daccprev;
                }
                elseif ($c == 4) {
                    ++$dcomprev;
                }
                elseif ($c == 5) {
                    ++$dhtbprev;
                }
                elseif ($c == 6) {
                    ++$dcbzprev;
                }
                elseif ($c == 7) {
                    ++$dpsyprev;
                }
                elseif ($c == 8) {
                    ++$dimtprev;
                }
                elseif ($c == 9) {
                    ++$disbprev;
                }
                elseif ($c == 10) {
                    ++$dvcdprev;
                }
                elseif ($c == 11) {
                    ++$dinaprev;
                }
                elseif ($c == 12) {
                    ++$dfpdprev;
                }
                elseif ($c == 13) {
                    ++$dmedprev;
                }
                elseif ($c == 14) {
                    ++$dftpprev;
                }
                elseif ($c == 15) {
                    ++$dmemprev;
                }
                elseif ($c == 16) {
                    ++$ddllprev;
                }
            }
        }

        $brandsprev = Brand::whereBetween('tanggal_permohonan', [$finalnow2, $finalprev])->pluck('helper');

        foreach ($brandsprev as $b) {
            $bpprev[] = explode(',', $b);
        }

        foreach ($bpprev as $b) {
            $bdprev[] = array_values( array_flip( array_flip($b)));
        }

        foreach ($bdprev as $b) {
            $bdepartmentsprev[] = Lecturer::select('department_id')->whereIn('id', $b)->get();
        }

        foreach ($bdepartmentsprev as $b) {
            foreach ($b as $d) {
                $beprev[] = $d->department_id;
            }
            $bfprev[] = $beprev;
            unset($beprev);
        }

        foreach ($bfprev as $b) {
            $bgprev[] = array_values( array_flip( array_flip($b)));
        }

        foreach ($bgprev as $d) {
            foreach ($d as $b) {
                if ($b == 1) {
                    ++$bibmprev;
                }
                elseif ($b == 2) {
                    ++$bbmiprev;
                }
                elseif ($b == 3) {
                    ++$baccprev;
                }
                elseif ($b == 4) {
                    ++$bcomprev;
                }
                elseif ($b == 5) {
                    ++$bhtbprev;
                }
                elseif ($b == 6) {
                    ++$bcbzprev;
                }
                elseif ($b == 7) {
                    ++$bpsyprev;
                }
                elseif ($b == 8) {
                    ++$bimtprev;
                }
                elseif ($b == 9) {
                    ++$bisbprev;
                }
                elseif ($b == 10) {
                    ++$bvcdprev;
                }
                elseif ($b == 11) {
                    ++$binaprev;
                }
                elseif ($b == 12) {
                    ++$bfpdprev;
                }
                elseif ($b == 13) {
                    ++$bmedprev;
                }
                elseif ($b == 14) {
                    ++$bftpprev;
                }
                elseif ($b == 15) {
                    ++$bmemprev;
                }
                elseif ($b == 16) {
                    ++$bdllprev;
                }
            }
        }

        return view('dashboard', compact('cibm', 'cbmi', 'cacc', 'ccom', 'chtb', 'ccbz', 'cpsy', 'cimt', 'cisb', 'cvcd', 'cina', 'cfpd', 'cmed', 'cftp', 'cmem', 'cdll',
            'pibm', 'pbmi', 'pacc', 'pcom', 'phtb', 'pcbz', 'ppsy', 'pimt', 'pisb', 'pvcd', 'pina', 'pfpd', 'pmed', 'pftp', 'pmem', 'pdll',
            'dibm', 'dbmi', 'dacc', 'dcom', 'dhtb', 'dcbz', 'dpsy', 'dimt', 'disb', 'dvcd', 'dina', 'dfpd', 'dmed', 'dftp', 'dmem', 'ddll',
            'bibm', 'bbmi', 'bacc', 'bcom', 'bhtb', 'bcbz', 'bpsy', 'bimt', 'bisb', 'bvcd', 'bina', 'bfpd', 'bmed', 'bftp', 'bmem', 'bdll',
        'copyright', 'patent', 'design', 'brand', 'year', 'yearnext', 'yearprev', 'copyrightyear', 'patentyear', 'designyear', 'brandyear',
        'copyrightnext', 'copyrightprev', 'patentnext', 'patentprev', 'designnext', 'designprev', 'brandnext', 'brandprev',
            'cibmyear', 'cbmiyear', 'caccyear', 'ccomyear', 'chtbyear', 'ccbzyear', 'cpsyyear', 'cimtyear', 'cisbyear', 'cvcdyear', 'cinayear', 'cfpdyear', 'cmedyear', 'cftpyear', 'cmemyear', 'cdllyear',
            'pibmyear', 'pbmiyear', 'paccyear', 'pcomyear', 'phtbyear', 'pcbzyear', 'ppsyyear', 'pimtyear', 'pisbyear', 'pvcdyear', 'pinayear', 'pfpdyear', 'pmedyear', 'pftpyear', 'pmemyear', 'pdllyear',
            'dibmyear', 'dbmiyear', 'daccyear', 'dcomyear', 'dhtbyear', 'dcbzyear', 'dpsyyear', 'dimtyear', 'disbyear', 'dvcdyear', 'dinayear', 'dfpdyear', 'dmedyear', 'dftpyear', 'dmemyear', 'ddllyear',
            'bibmyear', 'bbmiyear', 'baccyear', 'bcomyear', 'bhtbyear', 'bcbzyear', 'bpsyyear', 'bimtyear', 'bisbyear', 'bvcdyear', 'binayear', 'bfpdyear', 'bmedyear', 'bftpyear', 'bmemyear', 'bdllyear',
            'cibmnext', 'cbminext', 'caccnext', 'ccomnext', 'chtbnext', 'ccbznext', 'cpsynext', 'cimtnext', 'cisbnext', 'cvcdnext', 'cinanext', 'cfpdnext', 'cmednext', 'cftpnext', 'cmemnext', 'cdllnext',
            'pibmnext', 'pbminext', 'paccnext', 'pcomnext', 'phtbnext', 'pcbznext', 'ppsynext', 'pimtnext', 'pisbnext', 'pvcdnext', 'pinanext', 'pfpdnext', 'pmednext', 'pftpnext', 'pmemnext', 'pdllnext',
            'dibmnext', 'dbminext', 'daccnext', 'dcomnext', 'dhtbnext', 'dcbznext', 'dpsynext', 'dimtnext', 'disbnext', 'dvcdnext', 'dinanext', 'dfpdnext', 'dmednext', 'dftpnext', 'dmemnext', 'ddllnext',
            'bibmnext', 'bbminext', 'baccnext', 'bcomnext', 'bhtbnext', 'bcbznext', 'bpsynext', 'bimtnext', 'bisbnext', 'bvcdnext', 'binanext', 'bfpdnext', 'bmednext', 'bftpnext', 'bmemnext', 'bdllnext',
            'cibmprev', 'cbmiprev', 'caccprev', 'ccomprev', 'chtbprev', 'ccbzprev', 'cpsyprev', 'cimtprev', 'cisbprev', 'cvcdprev', 'cinaprev', 'cfpdprev', 'cmedprev', 'cftpprev', 'cmemprev', 'cdllprev',
            'pibmprev', 'pbmiprev', 'paccprev', 'pcomprev', 'phtbprev', 'pcbzprev', 'ppsyprev', 'pimtprev', 'pisbprev', 'pvcdprev', 'pinaprev', 'pfpdprev', 'pmedprev', 'pftpprev', 'pmemprev', 'pdllprev',
            'dibmprev', 'dbmiprev', 'daccprev', 'dcomprev', 'dhtbprev', 'dcbzprev', 'dpsyprev', 'dimtprev', 'disbprev', 'dvcdprev', 'dinaprev', 'dfpdprev', 'dmedprev', 'dftpprev', 'dmemprev', 'ddllprev',
            'bibmprev', 'bbmiprev', 'baccprev', 'bcomprev', 'bhtbprev', 'bcbzprev', 'bpsyprev', 'bimtprev', 'bisbprev', 'bvcdprev', 'binaprev', 'bfpdprev', 'bmedprev', 'bftpprev', 'bmemprev', 'bdllprev',));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
