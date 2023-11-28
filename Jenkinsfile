pipeline {
    agent any
    stages {
        stage('Get Repo') {
            steps {
                sh 'rm -rf /var/lib/jenkins/workspace/CICD/*'
                git branch: 'master', url: 'https://github.com/alexdoe99/theti.git'
            }
        }

        stage('Update Code') {
            steps {
                sh 'cd /var/lib/jenkins/workspace/CICD && git pull origin master'
            }
        }

        /* Commented out the 'Test' stage
        stage('Test') {
            steps {
                sh 'cd /var/lib/jenkins/workspace/CICD/UnitTestFiles/Test && phpunit --log-junit result.xml FirstTest.php'
            }
        }
        */

        stage('Deploy') {
            steps {
                sh 'cd /var/lib/jenkins/workspace/CICD && docker-compose up -d --build'
            }
        }
    }
}
