pipeline {
agent any
stages {


stage('Get Repo') {
steps {
    sh 'sudo rm -r /var/lib/jenkins/workspace/CICD/*'
    git branch: 'master', url: 'https://github.com/alexdoe99/theti.git'
    }
}

stage('old build down') {
steps {
    sh 'sudo chmod 777 -R /var/run/docker.sock'
    sh 'sudo chmod 777 -R /var/lib/jenkins/workspace/CICD/'
    sh 'cd /var/lib/jenkins/workspace/CICD/docker/ docker && docker-compose down'
}
}




stage('Build UP') {
steps {
sh 'docker system prune .'
sh 'docker build -t theti .'
sh 'docker run -d -p 8000:8000 theti '
sh 'cd /var/lib/jenkins/workspace/CICD/docker/ docker && docker-compose up -d --build'
}
}
stage('Test') {
steps {
sh 'cd /var/lib/jenkins/workspace/CICD && phpunit --log-junit result.xml UnitTestFiles/Test/'
}
}

}
}
