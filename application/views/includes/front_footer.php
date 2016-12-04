<footer>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-4">
                Copyright &copy; 2012 - <?= date('Y') ?>  All rights reserved.
            </div>
            <div class="col-sm-8">
                <ul class="footer-links">  
                    <li><a title="Articles & Blogs" href="<?= base_url('blog') ?>">Articles & Blogs</a></li> 
<!--                                                            
                    <li><a href="">Jobs</a></li> 
                    <li><a href="http://localhost/ops_old/jobs/interview_question_answer">Interview Questions</a></li> 
                    -->
                </ul>
            </div>
        </div>
    </div>
</footer>
<?= /* Page JS */ (!empty($js)) ? $this->util->jsList($js) : '' ?>
