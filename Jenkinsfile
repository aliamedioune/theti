pipeline {
    agent any
 stages {
     

      stage('Get Repo') {
            steps {
                sh 'sudo rm -r /var/jenkins_home/workspace/CICDWORKFLOW/*'
                git branch: 'main', url: 'https://github.com/aliamedioune/theti'           
            }
        }     
    
   

        
    stage('Build UP') {
            steps {
               sh 'docker build -t theti .' 
            }
        }
    stage('Test') {
            steps {
               sh 'cd /var/jenkins_home/workspace/CICDWORKFLOW && phpunit --log-junit result.xml UnitTestFiles/Test/'
            }
        }

    }
}
