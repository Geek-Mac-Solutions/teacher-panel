<?php

use App\Http\Controllers\Web\Home\HomeController;
use App\Http\Controllers\Web\ZoomMettingController;
use App\Http\Controllers\Web\StudentDetailsController;
use App\Http\Controllers\Web\AnalysisReportController;


use App\Http\Controllers\Web\ClassController;
use App\Http\Controllers\Web\VideoController;
use App\Http\Controllers\Web\FeesController;
use App\Http\Controllers\Web\PaymentHistoryController;
use App\Http\Controllers\Web\ProfileController;
use App\Http\Controllers\Web\TutesAndBookController;
use App\Http\Controllers\Web\TimeTableController;
use App\Http\Controllers\Web\ClassPaperController;
use App\Http\Controllers\Web\StudentTalentController;
use App\Http\Controllers\Web\NoticeBoardController;
use App\Http\Controllers\Web\OnlineExamController;
use App\Http\Controllers\Web\StudentAttendanceController;
use App\Http\Controllers\Web\NoteAndPaperController;
use App\Http\Controllers\Web\LearningManagementController;
use App\Http\Controllers\Web\ItemShopController;

use App\Http\Controllers\Web\TeacherSubjectController;
use App\Http\Controllers\Web\AuthController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/




// AuthController
Route::get('/home', [AuthController::class, 'homeView'])->name('web.home');
Route::get('/login', [AuthController::class, 'loginView'])->name('web.login');
Route::get('/forgot_password', [AuthController::class, 'forgotPassword'])->name('web.forgot_password');
Route::get('/register', [AuthController::class, 'registerView'])->name('web.register');
Route::get('/register-step1', [AuthController::class, 'registerStep1'])->name('web.register.step1');
Route::get('/register-step2', [AuthController::class, 'registerStep2'])->name('web.register.step2');
Route::get('/register-step3', [AuthController::class, 'registerStep3'])->name('web.register.step3');
Route::get('/register-step4', [AuthController::class, 'registerStep4'])->name('web.register.step4');
Route::get('/register-step5', [AuthController::class, 'registerStep5'])->name('web.register.step5');









Route::get('/', [HomeController::class, 'index'])->name('web.home');



// ZoomMettingController


Route::get('/zoom-metting/view', [ZoomMettingController::class, 'zoomMettingView'])->name('web.zoom-metting');
Route::get('/zoom-metting/view-list', [ZoomMettingController::class, 'zoomMettingList'])->name('web.zoom-metting.list');
Route::get('/zoom-metting/special-class', [ZoomMettingController::class, 'zoomSpecialClass'])->name('web.zoom-metting.special-class');



Route::get('/class-analysing/report', [ZoomMettingController::class, 'analysingReport'])->name('web.analysing-report');
// Video Recordings
Route::get('/video/view', [VideoController::class, 'videoView'])->name('web.video.view');
Route::get('/video/subject/view-list', [VideoController::class, 'videoSubjectList'])->name('web.video.subject.list');


// NoteAndPaperController

Route::get('/note-paper-ansewer-list', [NoteAndPaperController::class, 'notePaperList'])->name('web.note-paper.list');
Route::get('/pending-list', [NoteAndPaperController::class, 'pendingList'])->name('web.pending.list');
Route::get('/note-view', [NoteAndPaperController::class, 'noteView'])->name('web.note.view');
Route::get('/note-upload', [NoteAndPaperController::class, 'noteUpload'])->name('web.note.upload');




// Class Tutes And Books
Route::get('/tutes-books', [TutesAndBookController::class, 'tutesBook'])->name('web.tutes.book');

Route::get('/tutes-view', [TutesAndBookController::class, 'tutesView'])->name('web.tutes.open');





// Class paper
Route::get('/class-paper', [ClassPaperController::class, 'classPaper'])->name('web.class.paper');

Route::get('/class-paper-open', [ClassPaperController::class, 'classPaperView'])->name('web.paper.open');



// Student Details
Route::get('/student-details', [StudentDetailsController::class, 'studentDetails'])->name('web.student.details');
Route::get('/student-details-view', [StudentDetailsController::class, 'studentDetailsView'])->name('web.student.details_view');
Route::get('/student-payment-view', [StudentDetailsController::class, 'studentPaymentView'])->name('web.student.payment_view');
Route::get('/student-inactive-accounts', [StudentDetailsController::class, 'inactiveAccount'])->name('web.student.inactive_account');

Route::get('/student-non-paid', [StudentDetailsController::class, 'nonPaid'])->name('web.student.non_paid');









// LIVE CLASSES
Route::get('/class/view', [ClassController::class, 'classView'])->name('web.class.view');


Route::get('/video/monthly/view', [VideoController::class, 'videoMonthlyView'])->name('web.video.monthly');
Route::get('/video/monthly/list', [VideoController::class, 'videoMonthlyListView'])->name('web.video.list.monthly');
Route::get('/video/monthly/set', [VideoController::class, 'videoMonthlySet'])->name('web.video.set.monthly');

Route::get('/video/subject/view', [VideoController::class, 'videoSubjectView'])->name('web.video.subject');


// Fees
Route::get('/fees/view', [FeesController::class, 'feesView'])->name('web.fees.view');
Route::get('/fees/class', [FeesController::class, 'feesClass'])->name('web.fees.class');
Route::get('/fees/subject-cart', [FeesController::class, 'subjectCart'])->name('web.fees.subject_cart');
Route::get('/subject-cart', [FeesController::class, 'subjectCart'])->name('web.subject-cart');


// PaymentHistory
Route::get('/payment-history-month', [PaymentHistoryController::class, 'paymentHistoryMonth'])->name('web.payment.month');
Route::get('/payment-history-list', [PaymentHistoryController::class, 'paymentHistoryList'])->name('web.payment.list');




// profile

Route::get('/my-profile', [ProfileController::class, 'myProfile'])->name('web.profile');


// Class Tutes And Books
Route::get('/tutes-books', [TutesAndBookController::class, 'tutesBook'])->name('web.tutes.book');
Route::get('/tutes-books-view', [TutesAndBookController::class, 'tutesBookMonthly'])->name('web.tutes.view');
Route::get('/tutes-view', [TutesAndBookController::class, 'tutesView'])->name('web.tutes.open');


// Online exam
Route::get('/online-exam', [OnlineExamController::class, 'onlineExam'])->name('web.online.exam');
Route::get('/online-exam-view', [OnlineExamController::class, 'onlineExamMonthly'])->name('web.online.view');
Route::get('/add-questions', [OnlineExamController::class, 'addQuestions'])->name('web.online.questions');



// Analysis Report


Route::get('/analysis', [AnalysisReportController::class, 'analysis'])->name('web.analysis.view');
Route::get('/analysis-report', [AnalysisReportController::class, 'analysisReport'])->name('web.analysis.report');





// TIME TABLES
Route::get('/time-table', [TimeTableController::class, 'timeTable'])->name('web.time.table');



// Class paper
Route::get('/class-paper', [ClassPaperController::class, 'classPaper'])->name('web.class.paper');
Route::get('/class-paper-view', [ClassPaperController::class, 'classPaperMonthly'])->name('web.paper.view');
Route::get('/class-paper-open', [ClassPaperController::class, 'classPaperView'])->name('web.paper.open');


// STUDENT TALENTS
Route::get('/student-talents', [StudentTalentController::class, 'studentTalent'])->name('web.student.talents');
Route::get('/online-exam-result', [StudentTalentController::class, 'onlineExamResult'])->name('web.online.exam_result');
Route::get('/paper-answer', [StudentTalentController::class, 'paperAnswer'])->name('web.paper.answer');
Route::get('/student-certificates', [StudentTalentController::class, 'studentCertificate'])->name('web.student.certificates');
Route::get('/talent-videos', [StudentTalentController::class, 'talentVideos'])->name('web.talent.videos');
Route::get('/talent-videos-view', [StudentTalentController::class, 'talentVideosView'])->name('web.talent.videosView');
Route::get('/talent-videos-lesson', [StudentTalentController::class, 'talentVideosLesson'])->name('web.talent.videosLesson');
Route::get('/my-talent-videos', [StudentTalentController::class, 'myTalentVideos'])->name('web.my_talent');
Route::get('/other-talent-videos', [StudentTalentController::class, 'otherTalentVideos'])->name('web.other_talent');
Route::get('/review-teacher', [StudentTalentController::class, 'reviweTeacher'])->name('web.review.teacher');
Route::get('/term-test', [StudentTalentController::class, 'termTest'])->name('web.term.test');



// NoticeBoardController
Route::get('/notice-board', [NoticeBoardController::class, 'noticeBoard'])->name('web.notice.board');




// Student Attendance ATTENDANCE

Route::get('/student-attendance', [StudentAttendanceController::class, 'studentAttendance'])->name('web.student.attendance');
Route::get('/student-attendance-view', [StudentAttendanceController::class, 'studentAttendanceMonthly'])->name('web.student_attendance.view');
Route::get('/student-attendance-check', [StudentAttendanceController::class, 'studentAttendanceCheck'])->name('web.student_attendance.check');

// Learning Management
Route::get('/learning-management', [LearningManagementController::class, 'learningManagement'])->name('web.learning.management');
Route::get('/time-management', [LearningManagementController::class, 'timeManagement'])->name('web.time.management');
Route::get('/time-management/list-table', [LearningManagementController::class, 'timeManagementTable'])->name('web.time-mgt.list-table');
Route::get('/time-management/list-report', [LearningManagementController::class, 'timeManagementReport'])->name('web.time-mgt.list-report');
Route::get('/time-management/revising-plane', [LearningManagementController::class, 'revisingPlane'])->name('web.revising.plane');


// ItemShopController
Route::get('/item-shop', [ItemShopController::class, 'itemShop'])->name('web.item-shop');
Route::get('/single-item', [ItemShopController::class, 'singleItem'])->name('web.single-item');
Route::get('/order-history', [ItemShopController::class, 'orderHistory'])->name('web.order-history');
Route::get('/order-cart', [ItemShopController::class, 'orderCart'])->name('web.order-cart');








// Teacher Subject
Route::get('/teacher-subject', [TeacherSubjectController::class, 'teacherSubject'])->name('web.teacher.subject');
Route::get('/request-subject',[TeacherSubjectController::class, 'requestSubject'])->name('web.teacher.request-subject');



